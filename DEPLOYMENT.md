# Deployment Guide

## Overview

This project uses a simplified, Docker Compose-based deployment strategy that replaces complex artifact-based deployment with a more maintainable approach, following the principles from op-resume-cv-pro.

## Key Improvements

### ✅ What Changed

1. **Simplified Workflow**: Removed redundant build steps and complex artifact management
2. **Docker Compose**: Production deployment now uses Docker Compose for better service management
3. **Environment-Specific Configs**: Separate configuration files for production, staging, and development
4. **Automated Rollback**: Built-in rollback mechanism in case of deployment failures
5. **Better Health Checks**: Comprehensive health monitoring with proper startup times
6. **Cleaner Code**: Removed 100+ lines of complex deployment logic

### ✅ Benefits

- **Faster Deployments**: No more large artifact transfers
- **Easier Debugging**: Standard Docker Compose commands for troubleshooting
- **Better Rollback**: One-command rollback to previous versions
- **Environment Isolation**: Each environment has its own configuration
- **Maintainable**: Much easier to understand and modify

## Files Structure

```
.github/workflows/
├── deploy.yml                  # Main deployment workflow
docker-compose.yml              # Production Docker Compose
Dockerfile                      # Production-ready container
deploy.sh                       # Deployment script
.env.production               # Production environment config
.env.staging                  # Staging environment config
.env.development              # Development environment config
```

## Deployment Process

### Automatic Deployment (GitHub Actions)

The workflow automatically triggers on pushes to main branches:

1. **Validation** (PR only): Quick validation of Docker configuration
2. **Environment Setup**: Sets up environment-specific variables
3. **File Transfer**: Copies project files to server via SCP
4. **Deployment**: Runs the deployment script on the server
5. **Health Checks**: Verifies all services are healthy
6. **Cleanup**: Removes old images and containers

### Manual Deployment

You can also deploy manually using the deployment script:

```bash
# Deploy to production
./deploy.sh production

# Deploy to staging
./deploy.sh staging

# Rollback in case of issues
./deploy.sh production rollback
```

## Environment Configuration

### Required Secrets

Add these secrets to your GitHub repository:

- `SERVER_HOST`: Server hostname
- `SERVER_USER`: SSH username
- `SERVER_SSH_KEY`: Private SSH key for server access

### Environment Variables

Each environment has its own `.env.{environment}` file:

- `.env.production`: Production settings
- `.env.staging`: Staging settings
- `.env.development`: Development settings

## Health Checks

The deployment includes comprehensive health checks:

1. **Service Health**: All containers must report as "healthy"
2. **Application Health**: HTTP endpoint `/health.html` must respond
3. **Database Connectivity**: MySQL must be accessible
4. **Cache Connectivity**: Redis must be accessible

## Rollback Process

If deployment fails, the system automatically:

1. Stops the failed deployment
2. Restarts the previous working version
3. Logs detailed error information
4. Exits with error code

Manual rollback:
```bash
./deploy.sh production rollback
```

## Monitoring

After deployment, check service status:

```bash
# View all services
docker compose ps

# View logs
docker compose logs -f

# Check specific service
docker compose logs app
```

## Troubleshooting

### Common Issues

1. **Permission Issues**: Ensure SSH key has proper permissions
2. **Port Conflicts**: Check if required ports are available (8096 for app, 3308 for MySQL)
3. **Memory Issues**: Monitor server resources during deployment
4. **Network Issues**: Verify server connectivity and DNS resolution

### Debug Commands

```bash
# Test Docker build locally
docker build -t test-app .

# Validate Docker Compose
docker compose config

# Check environment variables
docker compose config --format json | jq '.services.app.environment'
```

## Security Notes

- Environment files are automatically created from `.env.example`
- Sensitive data should be in GitHub secrets, not in environment files
- SSH keys should have restricted permissions (600)
- Consider using Docker secrets for production deployments

## Port Configuration

This project uses different ports to avoid conflicts:
- **Application**: Port 8096 (instead of 8095)
- **MySQL**: Port 3310 (instead of 3307)
- **Redis**: Port 6380 (instead of 6379)

## Migration from Old System

The new system is backward compatible. The old workflow is replaced, but:

- Same environment variables are used
- Same server and ports are configured
- Database and file systems remain unchanged
- No data migration required

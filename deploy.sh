#!/bin/bash
set -e

echo "🚀 Deploying Laravel application..."

# Create .env if missing
[ ! -f .env ] && [ -f .env.example ] && cp .env.example .env

# Build and start containers
echo "🐳 Building and starting containers..."
docker compose down
docker compose build
docker compose up -d

# Wait for containers to be ready
echo "⏳ Waiting for containers to start..."
sleep 20

# Check if app container is running
if ! docker compose ps app | grep -q "Up"; then
    echo "❌ App container failed to start"
    docker compose logs app
    exit 1
fi

# Container handles app key generation

# Show status
echo "✅ Deployment successful!"
docker compose ps

echo "🎉 Done!"

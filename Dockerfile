# Use official PHP image with built-in server
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy everything into the image
COPY . .

# Expose port (matches Render internal port)
EXPOSE 10000

# Start PHP built-in server serving the public directory
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
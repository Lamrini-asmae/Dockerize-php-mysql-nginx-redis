# Use the official Redis image as a base
FROM redis:alpine

# Add your custom Redis configuration file (optional)
# COPY redis.conf /usr/local/etc/redis/redis.conf

# Expose Redis port
EXPOSE 6379

# Set the default command to run Redis with the default config
CMD ["redis-server", "/usr/local/etc/redis/redis.conf"]

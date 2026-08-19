-- Social Media Analytics SQL Queries

-- 1. Total Posts
SELECT SUM(Posts) AS Total_Posts
FROM social_media_data;

-- 2. Total Likes
SELECT SUM(Likes) AS Total_Likes
FROM social_media_data;

-- 3. Total Comments
SELECT SUM(Comments) AS Total_Comments
FROM social_media_data;

-- 4. Total Shares
SELECT SUM(Shares) AS Total_Shares
FROM social_media_data;

-- 5. Total Followers
SELECT SUM(Followers) AS Total_Followers
FROM social_media_data;

-- 6. Platform-wise Likes
SELECT Platform, Likes
FROM social_media_data
ORDER BY Likes DESC;

-- 7. Platform with highest likes
SELECT Platform, Likes
FROM social_media_data
ORDER BY Likes DESC
LIMIT 1;
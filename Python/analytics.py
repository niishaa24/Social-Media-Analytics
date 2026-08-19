import pandas as pd

print("Social Media Analytics Running")

# Load dataset
data = pd.read_csv("../Dataset/social_media_data.csv")

print("\nDataset:")
print(data)

# Basic Analytics
print("\nTotal Posts:")
print(data["Posts"].sum())

print("\nTotal Likes:")
print(data["Likes"].sum())

print("\nTotal Comments:")
print(data["Comments"].sum())

print("\nTotal Shares:")
print(data["Shares"].sum())

print("\nTotal Followers:")
print(data["Followers"].sum())

print("\nTop Platform:")
print(data.loc[data["Likes"].idxmax(), "Platform"])
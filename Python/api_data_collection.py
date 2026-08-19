import requests
import pandas as pd

print("Social Media API Data Collection")

API_URL = "https://jsonplaceholder.typicode.com/posts"

response = requests.get(API_URL)

if response.status_code == 200:
    api_data = response.json()

    data = pd.DataFrame(api_data)

    data.to_csv("../Dataset/api_data.csv", index=False)

    print("API data collected successfully!")
    print(data.head())

else:
    print("API request failed:", response.status_code)
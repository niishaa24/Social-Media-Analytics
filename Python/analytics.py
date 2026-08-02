import pandas as pd

print("Social Media Analytics Running")

data = pd.read_csv("../Dataset/social_media_data.csv")

print("\nDataset:")
print(data)

print("\nTotal Likes:")
print(data["Likes"].sum())

print("\nTop Platform:")
print(data.loc[data["Likes"].idxmax(), "Platform"])

import pandas as pd

print("Social Media Analytics Running")

data = pd.read_csv("../Dataset/social_media_data.csv")

report = {
    "Total Posts": data["Posts"].sum(),
    "Total Likes": data["Likes"].sum(),
    "Total Comments": data["Comments"].sum(),
    "Total Shares": data["Shares"].sum(),
    "Total Followers": data["Followers"].sum()
}

report_df = pd.DataFrame([report])

report_df.to_csv("../Dashboard/report.csv", index=False)

print("Report Generated Successfully")
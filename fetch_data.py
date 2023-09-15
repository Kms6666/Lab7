mport requests
import sys


response = requests.get('https://api.weather.gov/alerts/active/area/{}'.format(sys.argv[1]))
json_data = response.json()

for entry in json_data["features"]:
    print (entry["properties"]["headline"])

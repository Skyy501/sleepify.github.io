import sys
import joblib
import pandas as pd
import numpy as np
import argparse
import os

# Set up argument parser
parser = argparse.ArgumentParser()
parser.add_argument('--gender', type=str, required=True)
parser.add_argument('--age', type=int, required=True)
parser.add_argument('--work_difficulty', type=int, required=True)
parser.add_argument('--work_safety', type=int, required=True)
parser.add_argument('--sleep_duration', type=int, required=True)
parser.add_argument('--sleep_quality', type=int, required=True)
parser.add_argument('--physical_activity', type=int, required=True)
parser.add_argument('--stress_level', type=int, required=True)
parser.add_argument('--bmi_category', type=str, required=True)
parser.add_argument('--heart_rate', type=int, required=True)
parser.add_argument('--daily_steps', type=int, required=True)

# Parse the arguments
args = parser.parse_args()

# Absolute path to storage/app
# Use the correct relative path to your storage directory
# Absolute path to the storage/app directory (adjust this based on your project structure)
model_path = os.path.join('C:\\luke\\binus\\WEBPROG\\WebProgProject\\webprogprjct', 'storage', 'app', 'sleep_disorder_rf_model.pkl')
encoders_path = os.path.join('C:\\luke\\binus\\WEBPROG\\WebProgProject\\webprogprjct', 'storage', 'app', 'label_encoders.pkl')



# Load the model and label encoders
model = joblib.load(model_path)
label_encoders = joblib.load(encoders_path)

def predict_sleep_disorder(data):
    # Initialize user data dictionary
    user_data = {}

    # Iterate over the data and properly encode/convert each feature
    for feature, value in data.items():
        if feature in label_encoders:  # For categorical features, encode them
            user_data[feature] = label_encoders[feature].transform([value])[0]
        else:
            try:
                # Convert numeric features to float
                user_data[feature] = float(value)
            except ValueError:
                # Handle any unexpected non-numeric value gracefully
                print(f"Error: Unable to convert {value} to float for feature {feature}")
                return "Error: Invalid data"

    # Create DataFrame for prediction
    user_df = pd.DataFrame([user_data])

    # Make prediction
    prediction = model.predict(user_df)[0]

    # Decode the predicted class back to original label
    predicted_class = label_encoders['Sleep Disorder'].inverse_transform([prediction])[0]

    return predicted_class


# Main function to handle the input from Laravel
if __name__ == "__main__":
    # Collect the data passed from Laravel (arguments)
    data = {
        'gender': args.gender,
        'age': args.age,
        'work_difficulty': args.work_difficulty,
        'work_safety': args.work_safety,
        'sleep_duration': args.sleep_duration,
        'sleep_quality': args.sleep_quality,
        'physical_activity': args.physical_activity,
        'stress_level': args.stress_level,
        'bmi_category': args.bmi_category,
        'heart_rate': args.heart_rate,
        'daily_steps': args.daily_steps
    }

    # Get prediction
    result = predict_sleep_disorder(data)

    # Print result (Laravel will capture this output)
    print(result)

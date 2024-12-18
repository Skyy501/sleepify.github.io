<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SleepTestController extends Controller
{
    // Show the test form
    public function index()
    {
        return view('sleeptest');
    }

    // Handle the form submission and prediction
    public function predict(Request $request)
    {
        // Get form data
        $data = $request->all();

        // Example prediction logic
        $result = $this->predictSleepDisorder($data);

        return view('sleeptestresult', compact('result'));
    }

    // Prediction logic based on the input data
    private function predictSleepDisorder($data)
    {
        $score = 0;

        // Adjusting work difficulty: Lower difficulty = better sleep, but small impact
        if ($data['work_difficulty'] == 1) {
            $score += 1;  // Easier work has less stress impact
        } elseif ($data['work_difficulty'] == 2) {
            $score += 2;  // Slightly more difficult work
        } elseif ($data['work_difficulty'] == 3) {
            $score += 3;
        } elseif ($data['work_difficulty'] == 4) {
            $score += 4;
        } else {
            $score += 5;  // Most difficult work, highest stress
        }

        // Adjusting work safety level: Lower safety = higher stress, adds to score
        if ($data['work_safety_level'] == 1) {
            $score += 2;  // High-risk work adds stress
        } elseif ($data['work_safety_level'] == 2) {
            $score += 1;
        }

        // Sleep Duration: Sleep duration directly affects the score
        if ($data['sleep_duration'] < 5) {
            $score += 3;  // Short sleep duration increases risk of disorder
        } elseif ($data['sleep_duration'] < 6) {
            $score += 2;
        } elseif ($data['sleep_duration'] < 7) {
            $score += 1;
        } else {
            $score -= 1;  // 8+ hours of sleep generally helps
        }

        // Special rule: Sleep Quality vs Sleep Duration
        if ($data['sleep_duration'] >= 8 && ($data['quality_of_sleep'] == 1 || $data['quality_of_sleep'] == 2)) {
            // User has 8 hours of sleep but poor quality (1 or 2), no disorder predicted
            return 'No major disorder detected. However, maintaining good sleep hygiene and quality sleep is essential.';
        }

        // Stress Level: Higher stress impacts sleep
        if ($data['stress_level'] >= 4) {
            $score += 2;  // High stress contributes significantly to sleep problems
        } elseif ($data['stress_level'] == 3) {
            $score += 1;}

        // Physical Activity Level: More activity generally improves sleep
        if ($data['physical_activity_level'] < 30) {
            $score += 2;  // Low physical activity increases risk of disorder
        } elseif ($data['physical_activity_level'] < 60) {
            $score += 1;
        }

        // BMI Category: Underweight and Obesity both contribute to sleep issues
        if ($data['bmi_category'] == 'underweight') {
            $score += 3;  // Low BMI (underweight) can affect sleep quality
        } elseif ($data['bmi_category'] == 'obese') {
            $score += 4;  // Obesity often linked with Sleep Apnea
        }

        // Heart rate: High or low heart rate can indicate sleep disturbances
        if ($data['heart_rate'] < 60 || $data['heart_rate'] > 100) {
            $score += 2;
        }

        // Daily Steps: Lower steps suggest less activity, more risk of sleep issues
        if ($data['daily_steps'] < 5000) {
            $score += 1;
        }

        // Applying the prediction logic based on score thresholds
        if ($score >= 8) {
            return 'You may have a sleep disorder. We recommend further evaluation for Insomnia or Sleep Apnea.';
        } elseif ($score >= 5) {
            return 'You may have Insomnia. It\'s advisable to consult a healthcare professional for better sleep management.';
        } elseif ($score >= 3) {
            return 'You may have mild sleep issues. Consider improving your sleep hygiene and lifestyle.';
        } else {
            return 'No major disorder detected. However, maintaining a healthy lifestyle is important for good sleep quality.';
        }
    }
}


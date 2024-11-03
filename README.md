<p align="center">
  <a href="https://nuri.qliniqu.com" target="_blank"><img src="https://nuri.qliniqu.com/assets/logo/logo.png" width="400" alt="NURI Logo"></a>
</p>

## About NURI

NURI (National Unified Climate Response and Disease Analysis With Prediction System) is an innovative system aimed at tackling health challenges in Indonesia related to climate change. By integrating artificial intelligence and big data, NURI forecasts potential increases in climate-related diseases using data from BMKG (climate), KLHK (pollution), and BPJS health data (from 2016-2023).

### Key Features

- **Integrated Climate and Health Data**: Real-time data from multiple governmental sources.
- **Disease Prediction Models**: Identifies and clusters diseases based on climate trends.
- **Decision Support System**: Assists in proactive disease prevention and response.
- **Real-time Analytics and Dashboard**: Provides insights and visualizations for stakeholders.

## Objectives

NURI aims to utilize artificial intelligence and big data to:

- Analyze the relationship between climate and disease.
- Develop predictive systems to support preventive health actions.
- Provide data-driven insights to health institutions across Indonesia.

## Background

Indonesia, as a tropical archipelago, faces health challenges from climate change, including increases in infectious and non-infectious diseases. Unpredictable weather, temperature fluctuations, and irregular rainfall patterns contribute to the spread of diseases like dengue and respiratory infections. NURI bridges this gap by providing insights into these patterns, supporting effective health responses.

## Impact

NURI enhances the effectiveness of Indonesia’s climate-related disease prevention and management efforts. With data-driven insights, health institutions can take timely preventive actions, reduce the impact of diseases, and strengthen inter-agency collaboration, ultimately improving public health resilience.

---

## License

The NURI framework is proprietary software developed to support health initiatives in Indonesia, under the license of the Health Office of Semarang City.

## Installation Steps

### Minimum Requirements

- **PHP**: Version 8.1 or higher
- **Node.js**: Version 18 or higher
- **Database**: MySQL or PostgreSQL
- **Python** : Newest

### Installation Instructions For NURI Python

1. **Open Google Colab**  
   Access Google Colab at [https://colab.research.google.com/](https://colab.research.google.com/).

2. **Import a Python Project**  
   Import the `nuri.ipynb` file into Google Colab:

   - Go to the **File** menu, select **Upload Notebook**, and upload the `nuri.py` file from the downloaded source code.

3. **Upload Dataset**  
   After uploading the notebook, follow these steps to upload the dataset:
   - On the left sidebar, select the **Files** tab.
   - Click on the **Upload** button and choose the `DATA3BMG.xlsx` file to upload it to your Colab environment.
     Once the dataset is uploaded, you can run the cells in the `nuri.py` notebook to execute the code and work with the data in Google Colab.

### Installation Instructions For NURI System

1. **Clone the Repository**  
   Clone the NURI repository to your local machine:
   ```bash
   git clone https://github.com/dinkesmg/nuri.git
   cd nuri
   ```
2. **Copy Environment File**  
   Copy the .env.example file to .env:
   ```bash
   cp .env.example .env
   ```
3. **Install PHP Dependecies**  
   Install PHP dependencies using Compose:
   ```bash
   composer install
   ```
4. **Generate Application Key**  
   Generate an application key for Laravel:
   ```bash
   php artisan key:generate
   ```
5. **Configure the Database**  
   Update the .env file to configure your database settings. Use MySQL or PostgreSQL according to your preference.
6. **Run Database Migrations**  
   Run migrations to create the required tables in your database:
   ```bash
   php artisan migrate
   ```
7. **Install Node.js Dependencies**  
   Install Node.js dependencies with npm:
   ```bash
   npm install
   ```
8. **Build Frontend Assets**  
   Compile and build frontend assets:
   ```bash
   npm run build
   ```
9. **Start the Application**  
   Run the application locally and after following these steps, NURI should be up and running on your local server. Access it via http://localhost:8000:
   ```bash
   php artisan serve
   ```

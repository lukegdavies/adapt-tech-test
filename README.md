# Adapt Tech Test
Total Time: 2 hours 50 mins

## Description
The Adapt Tech Test is a small web application developed for a hypothetical healthcare clients. This application allows users to register, log in, and manage patient information. Built with Laravel and TailwindCSS, it focuses on providing a visually appealing and user-friendly interface for patient management.

## Installation Instructions
Follow these steps to set up the project on your local machine:

1. **Clone the Repository**
    ```bash
    git clone https://github.com/lukegdavies/adapt-tech-test.git
    cd adapt-tech-test
    ```

2. **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Set Up Environment Variables**
    - Copy the example environment file and modify it according to your setup:
    ```bash
    cp .env.example .env
    ```
    - Update the `.env` file with your database credentials and other settings.

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Run Migrations**
    ```bash
    php artisan migrate
    ```

6. **Compile Assets**
    ```bash
    npm run dev
    ```

7. **Serve the Application**
    ```bash
    php artisan serve
    ```
    Your application should now be running at `http://localhost:8000`.

## Usage
Once set up, you will be greeted with a welcome page (home page). There are two links at the top right: "Login" and "Register". You can choose to register or log in.

The registration and login follow the standard Laravel protocol, and you can enter details as you see fit.

### Post-Registration/Login Experience
- **Dashboard**: After registering or logging in, you will be redirected to a logged-in dashboard where you will see a CRM-type menu on the right and a user profile dropdown in the top left.
- **Patient Management**:
    - Navigate to the "Patients" page to see a table displaying all patients (display limit is 10 with pagination implemented).
    - To add a patient, click the "Add Patient" button at the top right, fill in the relevant details, and submit.
    - Once a patient is added, you will return to the patients' table view, where you will see a breakdown of information. Each patient entry includes "View", "Edit", and "Delete" buttons.
    - **View**: Displays all current patient details.
    - **Edit**: Brings up an edit page to update any patient details, redirecting back to the patients' page upon successful update.
    - **Delete**: Opens an Alpine modal confirming the delete action. Upon confirmation, the patient is deleted from the database.

## Features
- User registration
- User login
- Home page
- Logged-in dashboard and profile
- Patient management (CRUD system)

## Technologies Used
- Laravel
- TailwindCSS
- AlpineJS
- MySQL
- Eloquent ORM

## Credits
- [Laravel Documentation](https://laravel.com/docs/11.x/)

This README provides a comprehensive overview of the project and instructions to get it up and running. If you have any questions or need further assistance, please reach out to me luke.g.d.davies@outlook.com

Task Manager Application

Overview

The Task Manager Application is a Laravel-based project that allows users to create, assign, and manage tasks efficiently. It includes features such as task filtering, search functionality, and status updates to ensure seamless task tracking.

Features

Task Management: Add, edit, and delete tasks.

Task Assignment: Assign tasks to specific users.

Search and Filter: Search tasks by title, description, and filter tasks by priority, status, and assigned user.

Dynamic Status Updates: Update task statuses directly from the task list.

Priority Labels: Visual indicators for task priority (High, Medium, Low).

Technologies Used

Backend: Laravel 10

Frontend: Blade Templates, Bootstrap 5

Database: MySQL

Version Control: Git

Installation

Clone the Repository:

git clone https://github.com/username/task-manager.git
cd task-manager

Install Dependencies:

composer install
npm install

Environment Configuration:

Copy .env.example to .env.

cp .env.example .env

Update database credentials in the .env file:

DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

Generate Application Key:

php artisan key:generate

Run Database Migrations:

php artisan migrate

Seed Sample Data (Optional):

php artisan db:seed

Run the Application:

php artisan serve

Access the application at http://localhost:8000.

Usage

Task Assignment: Go to /tasks/assigned to view tasks assigned to you.

Filter Tasks: Use the dropdowns and search bar to filter tasks by priority, status, and assigned user.

Update Status: Change the status of tasks directly from the task table.

Routes

Method

URI

Action

GET

/tasks/assigned

Show assigned tasks

POST

/tasks

Create a new task

PUT

/tasks/{id}

Update task details or status

DELETE

/tasks/{id}

Delete a task

Folder Structure

- app/
  - Http/
    - Controllers/
      - TaskController.php
  - Models/
    - Task.php
    - User.php
- resources/
  - views/
    - tasks/
      - assigned.blade.php
- routes/
  - web.php
- database/
  - migrations/
- public/

Troubleshooting

Common Errors:

Undefined Variable $users
Ensure the assignedTasks method in TaskController is passing $users to the view.

Method Not Found Error:
Verify that the assignedTasks method is defined and linked properly in web.php.


Author

Muhamad Taha Talib

Contributions

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Contact

Email: mtahatalib110@gmail.com

Google Chrome:
1st Device Laptop

![image](https://github.com/user-attachments/assets/9f7aa113-019f-4b00-826d-94f505992f45)
![image](https://github.com/user-attachments/assets/590b5997-7417-4a7b-8734-5187006ac3fe)
![image](https://github.com/user-attachments/assets/39a633bc-ea03-4873-bd88-c345d78643b5)
![image](https://github.com/user-attachments/assets/046ba642-5914-4392-b4f2-1f9ec6fa96cc)
![image](https://github.com/user-attachments/assets/bda4ea52-94ee-4de7-9643-c4c44e40fdd7)
![image](https://github.com/user-attachments/assets/6cca986e-a951-4841-ade9-820d22c8eb4a)

2ND Device Tab:
![image](https://github.com/user-attachments/assets/42a7ac55-c3e0-4036-89c2-4aec729a3f84)
![image](https://github.com/user-attachments/assets/95fdc861-9a2f-4f1e-bf23-27c8d3a4d34f)
![image](https://github.com/user-attachments/assets/f8b06adc-9cfa-4adc-8245-1c1c6345a35a)
![image](https://github.com/user-attachments/assets/e127fab0-3a5d-4a04-a3fe-acc1b2c23be5)
![image](https://github.com/user-attachments/assets/6c90c621-074b-44ae-8722-8cc2729cb6c7)
![image](https://github.com/user-attachments/assets/e903bba1-5e15-4daa-82ff-058aef46ccac)

3RD Device Mobile:
![image](https://github.com/user-attachments/assets/174fd8de-bacd-4e5c-a5e9-17e0116538bd)
![image](https://github.com/user-attachments/assets/00b62e78-a043-4433-b36a-ba95618bcbbf)
![image](https://github.com/user-attachments/assets/f3317996-aec4-42bc-a8b5-2662905ecd87)
![image](https://github.com/user-attachments/assets/91ff2f53-8956-4266-a614-d4265362e38e)
![image](https://github.com/user-attachments/assets/d7db7f33-3ff7-4a71-aa27-df8e5d85bc82)
![image](https://github.com/user-attachments/assets/c2797dd6-05c6-4e6d-a042-b8f2a8257d92)


Microsoft Edge:
![image](https://github.com/user-attachments/assets/2bb9f19d-093e-4d54-be06-b8f311798d2a)
![image](https://github.com/user-attachments/assets/b20c5979-fb1c-484a-b5bd-241c34f2c0fe)
![image](https://github.com/user-attachments/assets/21f776cc-57c2-4e80-98da-1165d639396a)
![image](https://github.com/user-attachments/assets/491a7dde-86c0-408b-b883-75b0a1ad5a21)

2ND Device Tab:
![image](https://github.com/user-attachments/assets/de1229bb-5622-4aed-a5f3-62f5236d2db0)
![image](https://github.com/user-attachments/assets/1e4d4139-7f3a-430d-a2b2-5c6c14ff2c3f)


3RD Device Mobile:

![image](https://github.com/user-attachments/assets/d507fa4f-f869-4c87-be0f-d738d84166a1)
![image](https://github.com/user-attachments/assets/ab8dab11-8a53-4d15-a5af-a5d7a66b2dfb)
![image](https://github.com/user-attachments/assets/ca44d8a5-3dd9-4ada-b287-5d5a6957a7d8)
![image](https://github.com/user-attachments/assets/a4bb139b-3448-4515-be9c-59b3eaf4e285)


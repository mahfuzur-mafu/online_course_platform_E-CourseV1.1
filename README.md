# Online Course Platform (E-Course V1.1)

## Overview

The **Online Course Platform** is a web-based application designed to facilitate learning for students from junior to university levels. The platform connects instructors and students, enabling instructors to create and manage courses while allowing students to browse, enroll, and interact with the content. This project was developed as part of the Bachelor of Science in Computer Science and Engineering program at **Daffodil International University**.

## Features

### For Students:
- Browse available courses by topics, instructors, or levels.
- Enroll in courses and access learning materials.
- Interact with instructors via comments.
- Bookmark and save playlists for future reference.
- Report inappropriate content.
- Edit and manage their profile information.

### For Instructors:
- Create, manage, and update courses.
- Upload multimedia content including videos, images, and text.
- Interact with students through comments and feedback.
- Moderate student comments.

### General:
- Accessible to anyone with an internet connection.
- User-friendly interface for seamless navigation.

## Technologies Used

### Frontend:
- HTML
- CSS
- JavaScript

### Backend:
- PHP
- SQL (Database)

### Tools:
- Apache NetBeans (IDE)
- XAMPP (Localhost Server)
- phpMyAdmin (Database Management)

## Architecture

The project features a multi-tier architecture comprising the following components:
- **Frontend**: Provides the user interface and experience.
- **Backend**: Manages application logic and database interactions.
- **Database**: Stores user information, course details, and activity logs.

## Key Functionalities

### Functional Requirements:
- User registration and login for students and instructors.
- Content management for instructors.
- Commenting, reporting, and bookmarking for students.
- Responsive and dynamic user interfaces.

### Non-Functional Requirements:
- Scalability to handle large user bases.
- Secure authentication and data management.
- High performance with minimal latency.

## Installation and Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/mahfuzur-mafu/online_course_platform_E-CourseV1.1.git
   ```

2. Navigate to the project directory:
   ```bash
   cd online_course_platform_E-CourseV1.1
   ```

3. Set up the database:
   - Import the SQL schema provided in the `/database` folder into phpMyAdmin.
   - Configure the database connection in the `config.php` file.

4. Start the server:
   - Use XAMPP or any PHP server to run the project locally.

5. Access the application:
   Open your web browser and navigate to:
   ```
   http://localhost/E-CourseV1.1
   ```

## Screenshots

### Home Page (Without Login)
![Home Page](screenshots/home.png)

### Student Dashboard
![Student Dashboard](screenshots/student_dashboard.png)

### Instructor Dashboard
![Instructor Dashboard](screenshots/instructor_dashboard.png)

## Testing

### Test Cases:
The platform was rigorously tested for various functionalities, including:
- User registration and login.
- Course creation and management.
- Commenting, reporting, and bookmarking.

For detailed test cases and results, refer to the `testing` folder in the repository.

## Future Scope

The project lays the foundation for a scalable and comprehensive online course platform. Future enhancements may include:
- Live discussion features for real-time interaction.
- Advanced user profiles for both students and instructors.
- Integration with third-party Learning Management Systems (LMS).
- Mobile application development for Android and iOS.

## Acknowledgements

This project was supervised by **Ms. Afsara Tasneem Misha** (Lecturer, Department of CSE) and co-supervised by **Sharmin Akter** (Sr. Lecturer, Department of CSE) at Daffodil International University.

## License

This project is licensed under the [MIT License](LICENSE).



---

Thank you for exploring the Online Course Platform!

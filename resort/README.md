# T13_Online_Hotel_Reservation_System

## Brief Overview
The Online Hotel Reservation System (OHRS) is a comprehensive database management project designed to simplify the hotel booking and management processes. The primary goal of this project is to create, implement, and maintain a robust OHRS to elevate efficiency, precision, and transparency in handling hotel reservations and related operations.
. Establish a centralized database for hotel rooms and categories to facilitate efficient management.
. Implement real-time room availability monitoring for optimal utilization and seamless guest booking experiences.
. Enhance order processing capabilities, ensuring swift and error-free reservations.
. Provide an intuitive user interface for both guests and hotel staff, minimizing the learning curve.
. Enable comprehensive reporting and analytics, including user reviews for future enhancements.
. Implement role-based access control to preserve data privacy.
. Design the OHRS with scalability in mind, accommodating future growth and evolving business needs.

### Module
The Hotel Reservation System is divided into several modules, each serving a specific function to ensure a well-organized and efficient system. 
### Module 1: User Request and Room Booking 
This module allows the users to view the different types of rooms that are available for their stay. It let’s the user request and book a room according to the convenient dates.
Implementation: PHP scripts handles basic CRUD Operation that is used for creation of a request for room. HTML forms collect the required information and this is reflected in MySQL Database accordingly.
### Module 2: User feedback and rating 
This module enables the user to give reviews and lets them comment with regards to their stay in the hotel. It also avails them the facility to contact the admin with regards to any complaints or queries. 
Implementation: PHP scripts handle CRUD operations. HTML forms collect user input and interact with the MySQL database to update the user’s information such as name, phone number and their respective comments.
### Module 3: User room search and cancellation 
Allows the user to search for bookings to cross-check their details. It also allows the user to cancel their bookings and verify the same using search options.
Implementation: PHP scripts display the results of search after retrieving the data from the database.  
Deletion/cancellation of rooms are triggered and removed accordingly from the database. 
### Module 4: Admin Authentication and Room Availability 
This module allows the admins to login and allows them to view the total rooms assigned, the rooms available and the user requests for rooms.
Implementation: The availability of rooms, rooms assigned, the requested users all are represented using PHP which is connected to MySQL database. Access control is implemented to restrict functionalities only for admins.
### Module 5: Assign Rooms and invoice
Based on the availability of rooms and user requests for rooms the admin assigns the rooms accordingly.
Implementation: PHP scripts retrieve relevant data from the database and format it into reports. HTML and CSS are used to present the reports in a user-friendly manner for the invoice. 
Procedures are used for the assignment of rooms.
### Module 6: Admin review and Contact Management 
Admin privileges allows them to view all the reviews given by different users and also displays a list of comments/queries along with the user details for further interaction.
Implementation: PHP scripts retrieve relevant data from the database and format it into reports. Access controls ensure that only the admin can access user reviews and comments. 

### Team Members
. Sree Hema Hasmita Kancharla 
. Akula Pranavi



# Functional Webform with MySQL Implementation
 
I created an HTML form named "collect.html" that serves as an entry form for collecting user data. The form consists of various input fields, including a text field, textarea, radio buttons, checkboxes, and a select list with the 'multiple' attribute. This interactive form allows users to input their information conveniently.

To ensure data integrity and enhance the user experience, I implemented JavaScript code for form validation. All fields within the form are required, and I utilized custom JavaScript validation logic instead of relying on the HTML "required" attribute. If a user fails to fill in any field, an alert message is displayed, notifying them of the missing information. This client-side validation prevents the form from being submitted until all required fields are completed. The JavaScript code can be easily deactivated while keeping it available for future use.

Simultaneously, I set up a database table, named "collect," to store the form data. The table structure mirrors the fields present in the HTML form, ensuring a seamless connection between the form and the database. I leveraged PHP scripting to handle the form submission process, utilizing a PHP script named "collect.php." This script collects the form fields, performs server-side validation to ensure all fields are populated, and securely stores the validated data into the corresponding table in the database. In case of any validation errors, appropriate error messages are sent to the user, guiding them to provide complete information. Upon successful validation and data insertion, the PHP script responds to the user with a success message, confirming the submission's completion.

In the second part of the project, I developed a PHP script named "display.php" that retrieves and displays the stored data from the "collect" table. This script dynamically generates a two-dimensional HTML table, populating it with the rows from the database table. To enhance the table's visual appearance, I added column headers with different colors, providing a visually appealing display of the collected data. The PHP script is flexible and capable of adapting to any number of rows present in the database table, ensuring scalability and accommodating future data additions.

Throughout this project, I honed my skills in HTML form creation, JavaScript validation implementation, PHP scripting for data handling and database integration, and dynamic HTML table generation. I gained practical experience in leveraging client-side and server-side validation techniques, ensuring data accuracy and user-friendly interaction. Additionally, I learned how to seamlessly connect HTML forms with databases, securely store user data, and retrieve and display the collected information in a structured and visually appealing format.

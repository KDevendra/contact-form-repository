# Contact Form Repository

This repository provides a simple HTML contact form with client-side validation using jQuery and server-side processing in PHP for sending emails. The PHP script includes attachment support and is configured with SMTP settings.

## Features

- **HTML Form:** The form collects user input for name, email, contact number, and message.

- **Client-Side Validation:** jQuery is used for client-side validation, ensuring that the name and email fields are filled before submission.

- **Server-Side Processing:** PHP scripts handle form submissions. The `mail.php` script processes the form data and sends an email using the `sendEmail` function from `mail-config.php`.

- **Email Attachment:** The system supports attaching files to the email. You can configure this in the `mail.php` script by setting the `$attach` variable.

## Setup

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/KDevendra/contact-form-repository.git
   ```

2. **Configure Mail Settings:**
   - Open `mail-config.php` and provide your SMTP server details (host, port, username, password).
   - Adjust other settings as needed.

3. **Configure Email Recipient:**
   - Open `mail.php` and set the `$to` variable to the email address where you want to receive form submissions.
   - Optionally, configure the `$subject`, `$cc`, and `$attach` variables.

4. **Deploy:**
   - Upload the entire repository to your web server or hosting provider.

## Usage

1. Open the HTML form (`index.html`) in a web browser.
2. Fill in the required fields (name and email).
3. Click the "Submit" button.
4. Upon successful submission, a confirmation message will be displayed, and the form will be closed after a brief delay.

## File Structure

- **index.html:** HTML file containing the contact form.
- **mail-config.php:** PHP file with email configuration settings.
- **mail.php:** PHP file for processing form submissions and sending emails.
- **README.md:** Documentation file (you are reading it now).

## Contributing

Contributions are welcome! Please follow the [contribution guidelines](CONTRIBUTING.md) before submitting pull requests.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to use and modify the code for your own purposes.

---

**Note:** Ensure that your web server is configured to support PHP for the server-side processing to work correctly. Additionally, make sure to secure sensitive information such as SMTP credentials and other configuration details.

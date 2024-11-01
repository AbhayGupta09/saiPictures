# saiPictures
# Portfolio Website Project

A responsive portfolio website built with HTML, CSS, JavaScript, and Bootstrap. This project is designed to showcase your services, display your work, and provide potential clients with a way to contact you easily.

## Table of Contents
- [Demo](#demo)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Demo
[Link to live demo](#) — coming soon.

## Features
- **Responsive Design**: Adjusts layout for both desktop and mobile devices.
- **Navigation**: Off-canvas sidebar for mobile view, and smooth scrolling on click.
- **Services Section**: Details of services offered, including Drone Shooting and Wall LED installations.
- **Contact Form**: Integrated with a Google Map for easy location visibility.
- **Animation**: Animated drone GIF, image galleries, and hover effects.

## Technologies Used
- **HTML5**: For the website structure and content.
- **CSS3**: For styling and animations.
- **Bootstrap 5**: For responsive design and layout.
- **JavaScript**: For interactivity in the sidebar and smooth scrolling.
- **Google Maps**: Embedded to show the business location.

## Project Structure

portfolio-website/
├── assets/                     # Folder for all static assets
│   ├── css/                    # Custom CSS styles
│   │   └── style.css           # Main stylesheet
│   ├── images/                 # Images for the website
│   │   ├── logo.png            # Logo for navbar
│   │   ├── drone.gif           # Image for Drone Shooting service
│   │   ├── wall-led.jpg        # Image for Wall LED service
│   │   └── ...                 # Other images
│   ├── js/                     # JavaScript files
│   │   └── script.js           # Custom JS script
│   └── fonts/                  # Custom fonts (if any)
│
|
│   
├── index.html                  # Main HTML file for the homepage
├── contact.html                # Contact page with form and Google Map
├── header.html                 # Header/navbar with off-canvas sidebar
└── footer.html                 # Footer with links
├── services.html               # Services page detailing offerings
│
├── README.md                   # Project README file
├── LICENSE                     # Project license file
└── .gitignore                  # Git ignore file to exclude certain files/folders from version control




## Installation
1. Clone the repository to your local machine:
    ```bash
    git clone https://github.com/username/portfolio-website.git
    ```
2. Navigate to the project directory:
    ```bash
    cd portfolio-website
    ```
3. Ensure that all assets (e.g., `logo.png`, `drone.gif`, `wall-led.jpg`) are in place within the `assets/images/` directory.
4. Open `index.html` in your browser to preview.

## Usage
- **Desktop Navigation**: Links for About, Portfolio, Services, and Contact in the top navbar.
- **Mobile Navigation**: Off-canvas sidebar for the same links, auto-closes after a selection.
- **Contact Form**: Users can fill out the form to get in touch; the map provides the location context.

### Customizing Content
1. Update images in `assets/images/` for a personalized look.
2. Modify the navbar logo by replacing `assets/images/logo.png`.
3. Customize text and descriptions within each section in `index.html`.

## Contributing
1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/new-feature`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/new-feature`).
5. Create a new Pull Request.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

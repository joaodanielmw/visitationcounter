# Visitation Counter With PHP

## Abstract

This project aims to create a simple web-based page visitation counter using PHP. The goal is to track and display the number of visits to a webpage, providing insights into user interactions. The counter will be stored persistently and will update every time the page is loaded, using basic PHP functionalities such as file handling, cookies, and sessions.

## Objectives

- Learn and implement a simple page visitation counter using PHP.
- Understand the use of file handling in PHP to store and update visit data.
- Gain experience with PHP sessions and cookies for persistent data storage.
- Develop a basic understanding of how web traffic can be tracked and displayed dynamically.
- Enhance web development skills in PHP, including handling user requests and manipulating data files.

## Methods

- File Handling: Use PHP's built-in file handling functions to store and update the visit count in a simple text file.
- Cookies: Implement cookies to track if a user has already visited the page, preventing multiple counts in a short period.
- Basic HTML & PHP: Build the user interface with simple HTML and use PHP to process the visit data and display the result.

## Development

### Setting up the environment
- Setup the default PHP server to run the project locally
- Created the basic file structure, including the PHP script for handling visits and displaying results.

### Implementing File Handling
- Created a text file (visitations.txt) to store the number of visits.
- Developed PHP code to read and write the visit count to the file.

### Using Cookies for User Identification
- Added functionality to set a cookie that identifies whether the user has visited the page before.
- Implemented logic to only increment the visit counter if the user hasn't visited within the set duration.

### Displaying Results
- Designed a simple page to display the current number of visits.
- Integrated PHP with HTML to show the live update of the counter whenever the page is accessed.

## Conclusions

- This project helped solidify understanding of basic PHP functionalities like file handling, cookies, and sessions.
- By implementing a page visitation counter, I gained valuable experience in managing user data in a simple, persistent way.

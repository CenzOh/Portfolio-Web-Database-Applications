# Assignment 3
Form Handling\
Part 1, Warm Up / Simple form\ Username and password, validate input with a seperate file. Include the file on the top of the form. 

Part 2, Login Form\ Given a database with several username and passwords, access the json file with file_get_contents as well as decode the json string to a json obj / associative array with json_decode. Sanitize the input, check if input is in database, print out error message if not, or if so, create a welcome page with the username input.

Part 3, Signup Form\ Make sure error or success messages are hidden prior to clicking submit button. Apply formatting to either username or password with preg_match(). Error messages hsould siplay with an empty field, invalid username/password, and if there is no error display a success message. If the account is new, decode it to an associative arrya using array_push() and file_put_contents().

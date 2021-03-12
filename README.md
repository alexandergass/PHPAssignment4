# PHPAssignment4

1. Using the registration database from the previous assignment, create a php script to retrieve each user's last name. Loop through each retrieved record and add each last name to the end of an array named last_name_array. Sort the array alphabetically and use a for loop to display the values in the sorted array.

2. Using the registration database from assignment 3, create a php script to retrieve each user's user_id, first name, and last name. Loop through each record and add these three values to an array (user_array). Before proceeding to the next record, add this array to the end of another array named all_users (see discussion on multidimensional arrays). After all records have been added to the all_users array, loop through the all_users array and display the stored values for each user.
3a. Create a php script to store your 10 favorite movies in an xml file. Your xml file must contain the following elements: Title, Picture (use URL to live picture on web), Director, MainActor, IMDB (url from imdb), Year, and Genre. Your php program should save your xml data to fav_movies.xml. Use an XML validation tool to verify your xml file. If there are errors, fix and test until no errors remain.

3b. In a separate php program, retrieve the values from your xml file. Use a foreach statement to loop through the retrieved xml and display on a web page within a HTML table. Each cell will show the picture, title and year (as H1 element), followed by the director, main actor/actress, and genre. After every 3 entries displayed, start a new row.  

Cell Format Example:
PICTURE
TITLE (YEAR)
Director: .....
Main Actor/Actress: .....
Genre: ....

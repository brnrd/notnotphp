# notnotPHP

School project : a mini website to consult a mySQL db.

We were asked to do it in PHP.
The project is call notnotPHP because I first did this project using node.js, it was called notPHP. Since I had to do it in PHP still, I decided to add a not.

		!!PHP == PHP

You knew that.

Since the datamodel is really simple, I choose to enable the search in the data using the jQuery datatables.

There is only one view, the controller fetch the data through the dao. The dao only got one query.
All the magic happens client-side with the help of jQuery.

The search input filters all the columns. If you want to see all the data, you can type "*".
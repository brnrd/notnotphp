# notnotPHP

School project : a mini website to consult a mySQL db.

You can find it running [here][there]

## Why

We were asked to do it in PHP.
The project is call notnotPHP because I first did this project using Node.js, it was called notPHP. Since I had to do it in PHP still, I decided to add a not.

	!!PHP == PHP

You knew that.

### What it's made of

Since the datamodel is really simple, I choose to enable the search in the data using the jQuery datatables.

There is only one view, the controller fetch the data through the dao. The dao only got one query.
All the magic happens client-side with the help of [jQuery][jquery].

The database is hosted by [AlwaysData][alwaysdata] and the app by [AppFog][appfog]

### How it works

The search input filters all the columns. If you want to see all the data, you can type "*".


## Licence

Copyright (c) 2013 Bernard Debecker <bernard.debecker@gmail.com>

This work is free. You can redistribute it and/or modify it under the
terms of the Do What The Fuck You Want To Public License, Version 2,
as published by Sam Hocevar. See the [LICENCE][licence] file for more details.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

[licence]:https://bitbucket.org/brnrd/noipasaran/raw/b4bf2a8132fbdefb9c5e56787e75e45147323a80/LICENCE
[jquery]:http://jquery.com/
[alwaysdata]:https://www.alwaysdata.com/
[appfog]:https://www.appfog.com/
[there]:http://notnotphp.eu01.aws.af.cm/
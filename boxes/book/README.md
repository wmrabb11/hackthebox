# user:
  - Initial enumeration (nmap directory)
  - Only SSH and HTTP (scanned all ports)
  - Website (in PHP) and login page
  - Try to create an account as admin -> user exists
  - Create an account as 'fool' -> greeted with /home.php
  - PHP pages
    - index.php (login page)
    - home.php (Library, contains only links to other pages in the navbar)
    - books.php (list of all the books)
      - Downloaded all the books into the 'books' directory
      - Nothing too interesting on first glance
      - 'file' on each downloaded PDF
        - 1.pdf: PDF document, version 1.3
        - 2.pdf: PDF document, version 1.4
        - 3.pdf: PDF document, version 1.5
        - 4.pdf: PDF document, version 1.6
      - 'exiftool' on each of them reveals nothing too interesting. All files were modified in/before 2017
        - So there's probably nothing too interesting about them
    - search.php (search by either author or title)
    - feedback.php (send some feedback about a book to the administrator)
    - collections.php (upload a book by book title & author)
      - Can upload anything (but it just says we'll review it)
      - Doesn't show username (in the 'Signed in as ___')
      - Submit any file and "Thanks for the submission. We will evaluate and update the list"
    - contact.php (send a message to admin@book.htb)
    - profile.php (view and edit your profile)
      - Can change your name to 'admin'
      - Tried to change my role with an additional request param to 'role=admin', didn't work
      - However, it'll say 'updated' whenever it does anything
    - settings.php ("We are working on user login tracking feature. Hoping we will make it soon")
    - download.php (use ?file=NUM to grab a book)
      - Page by itself (no params) is an empty HTML page
      - Enter an invalid number -> it downloads an empty PDF
    - dirbuster found:
      - /admin. It's a login page but it now says "Authorized people only"
        - /admin/export. It's a 403
        - /admin/vendor. It's a 403
      - /docs. It's a 403, even when signed in
      - /images. It's a 403
      - /server-status. It's a 403
  - If not logged in, you can't see the other pages
  - Uses PHP sessions to store cookies
    - Insecure cookies (HTTPOnly=false, Secure=false)
    - Use dirb with session cookie
  - Use 'get_admin.py' to change the admin password to whatever you want
  - Login as admin and another session with a dummy user
  - [AS DUMMY] Submit a book for the collection with 'payload' as title (author and pdf uploaded don't matter)
  - [AS ADMIN] Now go to the collections page and download the PDF
  - In it, will be the SSH private key for user 'reader'
    - Note: I opened it with Firefox and used 'CTRL+A' because Adobe Acrobat wasn't playing well with the private key
  - SSH in with the private key
  - user pwned

# root:
  - Found a logrotate program that backs up files to a directory we have access to (in our home directory as user)
  - Google 'logrotate exploit/cve' and find [this](https://packetstormsecurity.com/files/154743/Logrotate-3.15.1-Privilege-Escalation.html)
  - Follow the steps provided there to get root
  - In summary (you'll need two sessions open for this): 
    - [LOCAL] Setup a NC listener
    - Get the logrotten binary (or compile it yourself on the box)
    - [SESSION 1] In tmp directory, create a payload file with a bash reverse shell
    - [SESSION 1] ```./logrotten -p payload /home/reader/backups/access.log```
    - [SESSION 2] ```echo "hello" > /home/reader/backups/access.log``` (repeat multiple times ~5 to trigger logrotate)
    - [LOCAL] Wait for a root reverse shell
  - root pwned

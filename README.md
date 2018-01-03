# lachal.neamar.fr
Imported from a 2005 1&1 codebase.

Requires a MySQL database with `Lachal_` tables backed up.

MySQL connection details should be in `DATABASE_URL`.

Pages are cached in `/tmp/cache-`, and cache is cleared on each deploy.
Every page can access 32M of memory, as defined in `.user.ini`.

The `.htaccess` deals with redirection and setting `Cache-Control` on static resources.

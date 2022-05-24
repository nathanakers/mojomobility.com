Made for Mojo Mobility, Inc.
Built by Nathan Akers — nate.akers@gmail.com

To update patents:
- clone this git repo
- add new patents to patents.php list (see instructions below)
- add new patent PDFs to /assets/patents/
- commit your changes to git and push them back into this github repo

patents.php will have code that looks like:

    'US11316371.pdf' => array(
        'number' => 'US 11,316,371 B1',
        'title' => 'System and Method for Inductive Charging of Portable Devices',
    ),

where the identification is the exact name of the PDF file,
where the patent number is pasted as formatted into 'number',
and the patent title is pasted into 'title'
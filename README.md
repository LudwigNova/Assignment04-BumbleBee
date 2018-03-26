#Assignment 4 Bumble-Bee
###IA - Luis Nova
###Coder - Melanie DeJong
###Design Artist - Fayth Kim
#####Website URL - 
#####Github - https://github.com/LudwigNova/Assignment04-BumbleBee

##Colophon
IA - The original site we used to build off of was a bit cluttered, but solid enough to organize. 

###Ontology
Most of the ontology is based off the original site, with a few tweaks to match the addition of a fourth student. A couple h2 tags were changed to h3 ones to keep text from looking too important to each students entry, when they really just served as subheadings.
###Choreography 
Originally, the site had a tab for each student, as the site was dedicated to tennis players in the classroom. I've reorganized the choreography of the site to focus on all students in 174, with tabs seperating the students based on a unique category that any students within that category share with other students in the same category. I added an economics student into the group, letting me split the students into two categories, one focusing on students with tennis experience and one focusing on students with work experience. The newly added fourth student was organized into the work experience group ("Professionals").  
###Layout 
All of the pages have an article layout. The orginal IA for the site didnt use any aside elements, and I was hard-pressed to find a need for one, so I kept it going.
###TypeFaces/Font
Personally, I think we could use some font that's a bit more legible than what we're currently using, something very biography writing, or blog friendly. I also think we could changed all of the h1 and h3 header fonts to something more clean and bold. I do like the fun look of the current h1 and h3 header font, but I think a text that comes off as really solid would help seperate the difference between topics and body text a bit more. 
###Form
The current form implementation can be found in the add student page. What it does is take in info that would be found in all the current student pages in either the "Tennis Players" or "Professionals" tabs. The idea is to allow someone to add new students, which will generate new tabs when a student with a Category that doesn't match any of the existing ones is added. Currently, the "name" attribute of each input field (e.g. name="category"), and said fields contents, is sent in an http POST message to the page loaded by the form (which is currently the studentAdded.php file), where these attributes can be called and used to display text from the form on the screen, or use text from the form to add data to a database (e.g. <?php echo $_POST["category"]; ?> is a use of the POST message data to display text on the page).

#####Currently, the following name attributes are for:
#######"firstName" = New student's first name
#######"lastName" = New student's last name
#######"bio" = New student's main bio text
#######"category" = New student's tab category
#######"subheading" = The heading after the new student's bio
#######"subheadingInfo" = The text under the heading after the new student's bio

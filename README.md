# Assignment 4 Bumble-Bee
### IA - Luis Nova
### Coder - Melanie DeJong
### Design Artist - Fayth Kim
##### Website URL - http://urcsc174.org/assignment04/Assignment04-BumbleBee/
##### Github - https://github.com/LudwigNova/Assignment04-BumbleBee

## Colophon
### IA 

The original site we used to build off of was a bit cluttered, but solid enough to organize. 

#### Ontology
Most of the ontology is based off the original site, with a few tweaks to match the addition of a fourth student. A couple h2 tags were changed to h3 ones to keep text from looking too important to each students entry, when they really just served as subheadings.
#### Choreography 
Originally, the site had a tab for each student, as the site was dedicated to tennis players in the classroom. I've reorganized the choreography of the site to focus on all students in 174, with tabs seperating the students based on a unique category that any students within that category share with other students in the same category. I added an economics student into the group, letting me split the students into two categories, one focusing on students with tennis experience and one focusing on students with work experience. The newly added fourth student was organized into the work experience group ("Professionals"). Each tab for category has a drop down for the students in said category.
#### Layout 
All of the pages had an article layoutm which I removed. The orginal IA for the site didnt use any aside elements, and I was hard-pressed to find a need for one, so I kept it going.
#### TypeFaces/Font
Personally, I think we could use some font that's a bit more legible than what we're currently using, something very biography writing, or blog friendly. I also think we could changed all of the h1 and h3 header fonts to something more clean and bold. I do like the fun look of the current h1 and h3 header font, but I think a text that comes off as really solid would help seperate the difference between topics and body text a bit more. 
#### Form
The current form implementation can be found in the "Leave Feedback?" tab. What it does is take in info from the user (currently the user's full name, their favorite student, and an explanation for why that student is their favorie) and then, on submission, send the form data in an http POST message to the page loaded by the form (which is currently the studentAdded.php file), where these attributes can be called and used to display text from the form on the screen, or use text from the form to add data to a database (e.g. <?php echo $_POST["category"]; ?> is a use of the POST message data to display text on the page).

##### Currently, the following name attributes are for:
###### "feedbackGiverName" = Full name of person giving feedback
###### "studentChoice" = The name of the student that the feedback giver chose from the radio button options
###### "reason" = The explanation for why the feedback giver's favorite student is that person.

### Designer

### Coder
  Known errors: blurry photos

# Project Name: (Simple Shop)
## Project Summary: (This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.)
## Github Link: (Prod Branch of Project Folder) https://github.com/kg497/IT202_011/tree/prod
## Project Board Link: https://github.com/kg497/IT202_011/projects/1
## Website Link: https://kg497-prod.herokuapp.com/Project
## Your Name: KellyAnne George

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] (mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
-
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
- [X] (11/11/2021) User will be able to register a new account
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/register.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141719457-4b153da2-a97e-4fbf-a288-5fd76b5a7057.png)
        - Image shows form with username, email, password, confirm password 
      - ![image](https://user-images.githubusercontent.com/90022095/141719502-f2401262-0095-4f05-989a-a8e6f9d41ff0.png)
        - Example of email validation working
      - ![image](https://user-images.githubusercontent.com/90022095/141719572-0f88672f-7dac-4bf0-b432-8b6970cccd9f.png)
        - Gives 'please fill out this field' message to show that username is required
      - ![image](https://user-images.githubusercontent.com/90022095/141719665-e306a3f6-e838-4980-8323-9042717f3af7.png)
        - After inputting two separate messages, the website tells the user to make sure the passwords match
- [X] (11/11/2021) User will be able to login to their account (given they enter the correct credentials)
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141719792-d87e6f60-ec96-4f33-8a2c-1674d0a32368.png)
        - Image shows ability to login with username or email
      - ![image](https://user-images.githubusercontent.com/90022095/141719854-44537b8b-7ea5-44c8-a50a-9276a2c01217.png)
        - Image shows you cannot login without password
      - ![image](https://user-images.githubusercontent.com/90022095/141719951-d795bd2a-791c-43a3-a519-260854202161.png)
        - Outputs an error messages when an account doesn’t exist
      - ![image](https://user-images.githubusercontent.com/90022095/141720005-b4881b8b-5177-47e5-bf1d-9bc38cc61cc8.png)
        - Logging in shows users names and give them admin role when I used my admin account. User also ends up at a landing page upon login. This image shows the protected page 'profile' that can only be seen by a logged in user.
- [X] (11/11/2021) User will be able to logout
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/logout.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141720199-c04237bd-0bb8-4810-900b-0d5326f244ee.png)
        - After logging out, a message is displayed and the user is redirected to the login page. 
- [X] (11/11/2021) Basic security rules implemented
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141379244-40c596d6-29ed-4406-9351-1baa4457a2b8.png)
        - Function to check if user is logged in. This function is only used for pages that need to be logged in. For example, the function has_role uses the is_logged_in function.
      - ![image](https://user-images.githubusercontent.com/90022095/141379569-8dcf9260-2ce3-4d33-b347-181e081f9b76.png)
        - Have roles table
- [X] (11/04/2021) Basic Roles implemented
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/admin/list_roles.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/31
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141380242-0e002136-b144-419a-8bc4-f15b84551614.png)
        - Roles table (id, name, description, is_active, modified, created)
      - ![image](https://user-images.githubusercontent.com/90022095/141380279-889b3901-2e24-4668-bcbe-7b33fe96227d.png)
        - User Roles table (id, user_id, role_id, is_active, created, modified)
      - ![image](https://user-images.githubusercontent.com/90022095/141380599-9d28c70e-239f-406a-b427-70a1b1a0028d.png)
        - Function to check if a user has a specific role 
- [X] (11/09/2021) Site should have basic styles/theme applied; everything should be styled
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/register.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/35
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141720336-e57ff090-0bc2-4f95-9b78-a134ac711fbb.png)
        - Shows styling
- [X] (11/11/2021) Any output messages/errors should be “user friendly”
  -  List of Evidence of Feature Completion
    - Status: ]Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141720414-6cf5974d-824b-4aae-a955-7adef9c50293.png)
        - Below is an example of a user friendly message, for when the user makes a mistake by putting in the incorrect password. 
- [X] (11/11/2021) User will be able to see their profile
  -  List of Evidence of Feature Completion, Partially working, Incomplete, Pending)
    - Direct Link: https://kg497-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/21
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141720502-49de3663-3922-467e-a8aa-e12d2f6bca63.png)
        - Shows user their email and username
- [X] (11/11/2021) User will be able to edit their profile
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141720822-255ff3e3-20fd-4d4b-94e3-3d0c5ea71b75.png)
        - When I changed the username to an existing username, the website would not allow it and displays a message so the user knows. 
      - ![image](https://user-images.githubusercontent.com/90022095/141721101-14229c83-0550-44a9-80be-26d80bf18fcb.png)
        - Password only resets when the correct password is provided. It displays a "user friendly" message to show that the original password is incorrect.
       
- Milestone 2
- [ ] (mm/dd/yyyy of completion) User with an admin role or shop owner role will be able to add products to inventory
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) Any user will be able to see products with visibility = true on the Shop page
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) Admin/Shop owner will be able to see products with any visibility
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) Admin/Shop owner will be able to edit any product
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) User will be able to click an item from a list and view a full page with more info 
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) User must be logged in for any Cart related activity below
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) User will be able to add items to Cart
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) User will be able to see their cart
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) User will be able to change quantity of items in their cart
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) User will be able to remove a single item from their cart vai button click
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) User will be able to clear their entire cart via a button click
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
        
- Milestone 3
- [ ] (mm/dd/yyyy of completion) User will be able to purchase items in their Cart
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) Order Confirmation Page
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) User will be able to see their Purchase History
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- [ ] (mm/dd/yyyy of completion) Store Owner will be able to see all Purchase History
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
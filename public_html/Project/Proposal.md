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
      - ![image](https://user-images.githubusercontent.com/90022095/141377215-2e56875f-8184-4eff-a76d-09195d8e08ed.png)
        - Image shows form with username, email, password, confirm password 
      - ![image](https://user-images.githubusercontent.com/90022095/141377412-bd041010-b7a5-4bff-ac9d-6f32cd119c86.png)
        - Example of email validation working
      - ![image](https://user-images.githubusercontent.com/90022095/141377527-bc54e887-110e-4e3a-bb4d-7f07c76cf652.png)
        - Gives 'please fill out this field' message to show that username is required
      - ![image](https://user-images.githubusercontent.com/90022095/141377583-9ce8a0d3-6290-419b-b14b-fc2a36daa35f.png)
        - Confirm passwords match
- [X] (11/11/2021) User will be able to login to their account (given they enter the correct credentials)
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141378096-513744af-d44c-4e7b-be4b-4c8301682872.png)
        - Image shows ability to login with username or email
      - ![image](https://user-images.githubusercontent.com/90022095/141378370-0fafbd3c-944f-4e71-a93e-572b51c91bf2.png)
        - Image shows you cannot login without password
      - ![image](https://user-images.githubusercontent.com/90022095/141378449-0b062f21-434c-4200-8caa-570f1f85f6fc.png)
        - Outputs an error messages when an account either doesn’t exist
      - ![image](https://user-images.githubusercontent.com/90022095/141378554-45e50ba0-cb92-4f68-a4ff-6d6a161f5f67.png)
        - Logging in shows users names and give them admin role when I used my admin account. User also ends up at a landing page upon login. This image shows the protected page 'profile' that can only be seen by a logged in user.
- [X] (11/11/2021) User will be able to logout
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141384930-a8b5b1b4-f85e-4849-a9f5-4407f1372838.png)
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
- [X] (11/11/2021) Basic Roles implemented
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/admin/list_roles.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141380242-0e002136-b144-419a-8bc4-f15b84551614.png)
        - Roles table (id, name, description, is_active, modified, created)
      - ![image](https://user-images.githubusercontent.com/90022095/141380279-889b3901-2e24-4668-bcbe-7b33fe96227d.png)
        - User Roles table (id, user_id, role_id, is_active, created, modified)
      - ![image](https://user-images.githubusercontent.com/90022095/141380599-9d28c70e-239f-406a-b427-70a1b1a0028d.png)
        - Function to check if a user has a specific role 
- [X] (11/11/2021) Site should have basic styles/theme applied; everything should be styled
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/register.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - [image](https://user-images.githubusercontent.com/90022095/141380783-d73523ea-86ef-40d9-a561-0a077828196e.png)
        - Shows styling
- [X] (11/11/2021) Any output messages/errors should be “user friendly”
  -  List of Evidence of Feature Completion
    - Status: ]Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141381079-f971ed9e-bb51-45bb-aa07-6b12c09d1955.png)
        - Below is an example of a user friendly message, for when the user makes a mistake. 
- [X] (11/11/2021) User will be able to see their profile
  -  List of Evidence of Feature Completion, Partially working, Incomplete, Pending)
    - Direct Link: https://kg497-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      -https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141381226-251e9fad-7394-40eb-9f83-6221e3cd71df.png)
        - Shows user their email and username
- [X] (11/11/2021) User will be able to edit their profile
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://kg497-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - https://github.com/kg497/IT202_011/pull/36
    - Screenshots
      - ![image](https://user-images.githubusercontent.com/90022095/141381226-251e9fad-7394-40eb-9f83-6221e3cd71df.png)
        - Shows user their email and username
- Milestone 2
- Milestone 3
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
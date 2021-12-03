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
      - https://github.com/kg497/IT202_011/pull/58
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
      - https://github.com/kg497/IT202_011/pull/58
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
      - https://github.com/kg497/IT202_011/pull/58
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
       
            
      
<table><tr><td>Milestone 2</td></tr><tr><td><table><tr><td>F1 - User with an admin role or shop owner role will be able to add products to inventory (2021-11-26)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/admin/add_item.php](https://kg497-prod.herokuapp.com/Project/admin/add_item.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/59](https://github.com/kg497/IT202_011/pull/59)</p></td></tr><tr><td><table><tr><td>F1 - Table should be called Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144547495-2529dbe1-95ed-4214-bbec-75efd7bd3b0a.png"><p>Products table has all the required data</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144549595-c8060514-2c0b-45ad-a53c-6d6d1f803f4f.png"><p>Form where admin can add item to Products table</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144549776-09e3c746-d812-4b9e-b426-9e45184dcd6c.png"><p>A normal user cannot add an item to Products table. </td></tr></td></tr></table></td></tr><table><tr><td>F2 - Any user will be able to see products with visibility = true on the Shop page (2021-11-28)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/shop.php](https://kg497-prod.herokuapp.com/Project/shop.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/60](https://github.com/kg497/IT202_011/pull/60)</p><p>

 [https://github.com/kg497/IT202_011/pull/65](https://github.com/kg497/IT202_011/pull/65)</p></td></tr><tr><td><table><tr><td>F2 - Product list page will be public (i.e. doesn’t require login)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144569071-f4c47f6f-ad34-4db8-87a4-808c39e4d04e.png"><p>No one is logged into the website, but the shop page is still visible with all products shown. </td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - For now limit results to 10 most recent<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144569228-08a89a60-77ca-4c71-8422-44cb14da721d.png"><p>The initial shop page limits the items to 10 and uses Order By Modified Desc to get the most recently updated items. </td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to filter results by category<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144569582-71e51d35-d112-4cca-922f-9fb6118b6822.png"><p>After searching the category 'dessert', only products from the table with that category get displayed to the user. In this example, the user can see products like ice cream, apple pie, cookie, and cheesecake.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to filter results by partial matches on the name<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144569843-dc9ca3b8-b948-40bf-b4d3-4fe1ab228e3d.png"><p>When searching for 'ham', the shop shows all items that have 'ham' in it. So, this displays 'hamburger' and 'ham sandwich'.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will be able to sort results by price<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144570077-cee13918-fb91-44ca-bf12-71c1801dc272.png"><p>After clicking the 'Price Ascend' button, it is clear in the screenshot that the first item has the smallest price and it increases in order. </td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144570333-0d2833a8-b1c0-42b4-bf50-b6ca08064b81.png"><p>After clicking the 'Price Descend' button, it is clear in the screenshot that the first item has the largest price and it decreases in order. </td></tr></td></tr></table></td></tr><table><tr><td>F3 - Admin/Shop owner will be able to see products with any visibility (2021-11-26)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/admin/list_items.php](https://kg497-prod.herokuapp.com/Project/admin/list_items.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/59](https://github.com/kg497/IT202_011/pull/59)</p></td></tr><tr><td><table><tr><td>F3 - This should be a separate page from Shop, but will be similar<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144571246-5b571087-d9f1-4102-894a-3b1fea8e6a02.png"><p>The List items page allows admin to see any item with any visibility. In the screenshot, two items are shown when searching for 'chicken', including the product with visibility 0.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - This page should only be accessible to the appropriate role(s<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144571519-66a88193-b688-4d7b-bafe-5a68af7b2294.png"><p>This code snippet shows a check to make sure the user is an admin, before allowing them to see this page. </td></tr></td></tr></table></td></tr><table><tr><td>F4 - Admin/Shop owner will be able to edit any product (2021-12-03)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/admin/list_items.php](https://kg497-prod.herokuapp.com/Project/admin/list_items.php)</p><p>

 [https://kg497-prod.herokuapp.com/Project/admin/edit_item.php?id=4](https://kg497-prod.herokuapp.com/Project/admin/edit_item.php?id=4)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/59](https://github.com/kg497/IT202_011/pull/59)</p><p>

 [https://github.com/kg497/IT202_011/pull/68](https://github.com/kg497/IT202_011/pull/68)</p></td></tr><tr><td><table><tr><td>F4 - Edit button should be accessible for the appropriate role(s) anywhere a product is shown (Shop list, Product Details Page, etc)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144572085-a1083f5d-5410-4829-90b0-62f1a0a3b3ba.png"><p>Example of form for admin to update the data in the Products table</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144572315-69e8b9d6-c0c5-4b5b-aef5-891104a4dd11.png"><p>When seeing the products listed, the admin can click the EDIT link, which will take them to the edit item form. </td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144633486-c9217556-1b54-42c4-aefa-f3383b6dd1a0.png"><p>When seeing the shop page, only admin users also have the ability to click the edit link</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144633575-96c3d2bb-544b-4ed5-98aa-d514bd8d6abe.png"><p>When going to an Item's Detail Page, admins have an edit button. </td></tr></td></tr></table></td></tr><table><tr><td>F5 - User will be able to click an item from a list and view a full page with more info about the item (Product Details Page) ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/details.php](https://kg497-prod.herokuapp.com/Project/details.php)</p><p>

 [https://kg497-prod.herokuapp.com/Project/details.php?id=16](https://kg497-prod.herokuapp.com/Project/details.php?id=16)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/60](https://github.com/kg497/IT202_011/pull/60)</p></td></tr><tr><td><table><tr><td>F5 - <tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144573188-343572c1-4a41-4e73-8f15-8b48a03c4dc9.png"><p>The detail link on each item in the shop, allows the user to look at more details about that specific product. </td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144573073-834b3b8e-6f84-4887-a887-577522b70694.png"><p>Item Detail Page gives user more information about the Product. </td></tr></td></tr></table></td></tr><table><tr><td>F6 - User must be logged in for any Cart related activity below (2021-12-01)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/cart.php](https://kg497-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/61](https://github.com/kg497/IT202_011/pull/61)</p></td></tr><tr><td><table><tr><td>F6 - <tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144573659-5d8e9493-8650-4676-9459-95b645ad8d3e.png"><p>When logged out, going to the cart link prints the message "You must be logged in to view this page" and redirects the user back to the login page. </td></tr></td></tr></table></td></tr><table><tr><td>F7 - User will be able to add items to Cart (2021-12-01)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/shop.php](https://kg497-prod.herokuapp.com/Project/shop.php)</p><p>

 [https://kg497-prod.herokuapp.com/Project/add_cart.php?id=17unit_price=5.87](https://kg497-prod.herokuapp.com/Project/add_cart.php?id=17unit_price=5.87)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/61](https://github.com/kg497/IT202_011/pull/61)</p></td></tr><tr><td><table><tr><td>F7 - Cart will be table-based (id, product_id, user_id, desired_quantity, unit_cost, created, modified)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144574759-2fdb0e1d-7331-4635-a971-49ef23c0144e.png"><p>Cart table created with correct columns</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F7 - Adding items to Cart will not affect the Product's quantity in the Products table<tr><td>Status: completed</td></tr><tr><td><img width="100%" src=""><p>Adding item to a cart has no correlation with the quantity in the Products table</td></tr></td></tr></table></td></tr><table><tr><td>F8 - User will be able to see their cart (2021-12-02)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/cart.php](https://kg497-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/61](https://github.com/kg497/IT202_011/pull/61)</p></td></tr><tr><td><table><tr><td>F8 - List all the items<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144575377-edb28d87-e864-4f2c-8633-4665e6c2f227.png"><p>The Cart shows all the items a user added to cart</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Show subtotal for each line item based on desired_quantity * unit_cost<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144575377-edb28d87-e864-4f2c-8633-4665e6c2f227.png"><p>For the example Fried Chicken, quantity =4 and unit price = $5.87. The Cart correctly shows the total as being $23.48</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Show total cart value (sum of line item subtotals)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144575692-e424b5c8-b145-46cc-9ce8-65505b962436.png"><p>Summation of all total from each cart item is added together and displayed at bottom of cart. </td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Will be able to click an item to see more details (Product Details Page)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144575377-edb28d87-e864-4f2c-8633-4665e6c2f227.png"><p>The details link is in each cart item, which takes the user to the Item's Detail Page</td></tr></td></tr></table></td></tr><table><tr><td>F9 - User will be able to change quantity of items in their cart (2021-12-02)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/cart.php](https://kg497-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/62](https://github.com/kg497/IT202_011/pull/62)</p><p>

 [https://github.com/kg497/IT202_011/pull/61](https://github.com/kg497/IT202_011/pull/61)</p></td></tr><tr><td><table><tr><td>F9 - Quantity of 0 should also remove from cart<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144576674-ea3da6f5-e00c-4176-822d-0b382570f87e.png"><p>User can update the desired quantity through the form. This also updates the information in the cart data. </td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144576843-175a808c-217d-4cd2-bed0-5803b118ee5a.png"><p>After inserting a 0 into the quantity form, Fried Chicken is removed from the cart screen. </td></tr></td></tr></table></td></tr><table><tr><td>F10 - User will be able to remove a single item from their cart via button click (2021-12-02)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/cart.php](https://kg497-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/61](https://github.com/kg497/IT202_011/pull/61)</p></td></tr><tr><td><table><tr><td>F10 - <tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144577339-22eff6d7-b2dd-46a3-b476-66955d85f643.png"><p>Each item in the cart has a 'Delete Item' button shown above. When clicked, the cart table will be updated to not include that product and the user will no longer see it visible on the screen </td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144577610-aa01c0e2-e051-4832-9729-7fd09dd7353a.png"><p>This snippet shows how the Post request from the delete button will delete from the Cart table where the User and Product are equal to the current user and the product is the one associated with the delete button. </td></tr></td></tr></table></td></tr><table><tr><td>F11 - User will be able to clear their entire cart via a button click (2021-12-02)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://kg497-prod.herokuapp.com/Project/cart.php](https://kg497-prod.herokuapp.com/Project/cart.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/kg497/IT202_011/pull/61](https://github.com/kg497/IT202_011/pull/61)</p></td></tr><tr><td><table><tr><td>F11 - <tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144578051-d1c15c9b-9b3d-4353-b2cd-ecb0c2bed15d.png"><p>Screenshot shows a button that can Clear Cart. </td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90022095/144578125-4a512eb6-da7d-42e6-930c-3a92a942f837.png"><p>This snippet shows that if the clear button is clicked, all data is removed from the Cart table where the user equals the current user. </td></tr></td></tr></table></td></tr></td></tr></table>

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

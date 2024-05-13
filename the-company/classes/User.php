<!-- Child Class -->

<?php
   include "Database.php";

   class User extends Database{
       # The logic of the application will placed inside this class (CRUD,data manipulation, arithmetic operations)
     
       public function store($request){
        # The store() method inserts a record into the users table
        # $request holds the date from the form. This will catch the value of the $_POST from the action/register.php
          $first_name = $request['first_name'];
          # $_POST['first_name']
          $last_name = $request['last_name'];
          $username = $request['username'];
          $password = $request['password'];

          $password = password_hash($password, PASSWORD_DEFAULT);

          $sql = "INSERT INTO users (first_name, last_name, username, `password`) VALUES ('$first_name', '$last_name', '$username', '$password')";

          if($this->conn->query($sql)){
             header('location:../views');//go to the index page
             exit;
          }else{
              die('Error in creating the user account: '. $this->conn->error);
          }
       }

       public function login($request){
          $username = $request['username'];
          $password = $request['password'];

          $sql = "SELECT * FROM users WHERE username = '$username'";
          $result = $this->conn->query($sql);

          # Check the username if existing or not
          if($result->num_rows == 1){
              # Check if the result has an existing record that is equal to 1 record
             
              # Retrieve the record of the user
              $user = $result->fetch_assoc();
              # $user = ['id'] => 1, 'username' => 'mary', 'password' => '$2y$10....'

              # Check if the password is correct
               if(password_verify($password, $user['password'])){
                     # Create a session variables for the future use.
                     session_start();
                     $_SESSION['id'] = $user['id'];
                     $_SESSION['username'] = $user['username'];
                     $_SESSION['full_name'] = $user['first_name'] ." ". $user['last_name'];

                     header('location: ../views/dashboard.php');
                     exit;
               }else{
                    die('Password is incorrect');
               }

          }else{
             die('Username not found.');
          }
       }

       public function logout(){
           session_start();
           session_unset();
           session_destroy();

           header('location:../views'); // go to index.php
           exit;
       }

       public function getAllUsers(){
          # getAllUsers() method allows to retrieve all users from the datebase

          $sql = "SELECT * FROM users";

          if($result = $this->conn->query($sql)){
                 return $result;
          }else{
                die('Error in retrieving all users: '. $this->conn->error);
          }
       }

       public function getUser($id){
           # getUser() method that allows to retrive an specific user

           $sql = "SELECT * FROM users WHERE id = $id";

           if($result = $this->conn->query($sql)){
                 return $result->fetch_assoc();
           }else{
                die('Error in retrieving the user:'. $this->conn->error);
           }
       }
     
       public function update($request, $files){
          session_start();
          $id = $_SESSION['id'];
          $first_name = $request['first_name'];
          $last_name = $request['last_name'];
          $username = $request['username'];
          $photo = $files['photo']['name']; # name of the file
          $tmp_photo = $files['photo']['tmp_name']; # path of the file inside the temporary in our comouter. The file is placed in a temporary folder before moving to the destination.

          $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $id";

          if($this->conn->query($sql)) {
              $_SESSION['usesname'] = $username;
              $_SESSION['full_name'] = "$first_name $last_name";

              # If there is an uploaded photo, save it to the database and save the file to the images folder
              # name of the file will be interested to the photo column
              # file to be uploaded will be saved in the images folder
              if($photo){
                  $sql = "UPDATE users SET photo = '$photo' WHERE id = $id";
                  $destination = "../assets/images/$photo";

                  # Save the image name to the database
                  if($this->conn->query($sql)){
                        # Save the file to images folder
                        if(move_uploaded_file($tmp_photo, $destination)){
                            header('location:../views/dashboard.php');
                        }else{
                          die('Error moving the photo');
                        }
                  }else{
                      die('Error in uploading photo'.$this->conn->error);
                  }
              }

              header('location: ../views/dashboard.php');
              exit;
          }else{
             die('Error in updating the user information:' . $this->conn->error); 
          }
       }
       public function delete(){
        # delete() allows us to permanently delete the recoed in the database
          session_start();
          $id = $_SESSION['id'];

          $sql = "DELETE FROM users WHERE id = $id";

          if($this->conn->query($sql)){
                $this->logout();
                # call the logout() method to remove all the sessions and redirect user to index(login)
          }else{
              dis('Error in deleting your account:'.$this->conn->error);
          }
       }
   }

?>
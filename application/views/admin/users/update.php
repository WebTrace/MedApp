<?Php if(count($user) > 0) : ?>
    <div class="row">
        <div class="col-lg-6 border-right">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="edit-details-header">Personal ddetails</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            Title
                        </div>
                        <div class="col-lg-7">
                            <div class="edit-input-grouper">
                                <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                <input type="text" name="" id="" class="edit-input" value="<?Php echo $user["title"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            First name
                        </div>
                        <div class="col-lg-7">
                            <div class="edit-input-grouper">
                                <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                <input type="text" name="" id="" class="edit-input" value="<?Php echo $user["first_name"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            Last name
                        </div>
                        <div class="col-lg-7">
                            <div class="edit-input-grouper">
                                <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                <input type="text" name="" id="" class="edit-input" value="<?Php echo $user["last_name"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            ID number
                        </div>
                        <div class="col-lg-7">
                            <div class="edit-input-grouper">
                                <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                <input type="text" name="" id="" class="edit-input" value="<?Php echo $user["id_number"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            Gender
                        </div>
                        <div class="col-lg-7">
                            <div class="edit-input-grouper">
                                <span class="non-edit-data-icon"><i class="fa fa-lock"></i></span>
                                <input type="text" name="" id="" disabled="disabled" class="edit-input" value="<?Php echo $user["gender"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            Contact number
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <?Php if(count($phone_contacts) > 0) : ?>
                                    <div class="col-lg-12">
                                        <ul class="data-repeat">
                                            <?Php foreach($phone_contacts as $phone_contact) : ?>
                                                <li class="edit-input-grouper">
                                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" name="contact_no[]" class="edit-input" value="<?Php echo $phone_contact['contact_no']; ?>">
                                                </li>
                                            <?Php endforeach; ?>
                                        </ul>
                                    </div>
                                <?Php else : ?>
                                    <div class="col-lg-12">
                                        <div class="edit-input-grouper">
                                            <p class="no-data-found">No contact numbers found.</p>
                                        </div>
                                    </div>
                                <?Php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            Email address
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <?Php if(count($email_contacts) > 0) : ?>
                                    <div class="col-lg-12">
                                        <ul class="data-repeat">
                                            <?Php foreach($email_contacts as $email_contact) : ?>
                                                <li class="edit-input-grouper">
                                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" name="contact_no[]" class="edit-input" value="<?Php echo $email_contact['email_address']; ?>">
                                                </li>
                                            <?Php endforeach; ?>
                                        </ul>
                                    </div>
                                <?Php else : ?>
                                    <div class="col-lg-12">
                                        <div class="edit-input-grouper">
                                            <p class="no-data-found">No contact numbers found.</p>
                                        </div>
                                    </div>
                                <?Php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="edit-details-header">Account details</h4>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            Username
                        </div>
                        <div class="col-lg-7">
                            <div class="edit-input-grouper">
                                <span class="non-edit-data-icon"><i class="fa fa-lock"></i></span>
                                <input type="text" name="" id="" disabled class="edit-input" value="<?Php echo $user["username"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            User role
                        </div>
                        <div class="col-lg-7">
                            <div class="edit-input-grouper">
                                <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                <input type="text" name="" id="" class="edit-input" value="<?Php echo $user["role_name"]; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row edit-group">
                        <div class="col-lg-5">
                            User status
                        </div>
                        <div class="col-lg-7">
                            <div class="edit-input-grouper">
                                <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                <input type="text" name="" id="" class="edit-input" value="<?Php echo $user["status_name"]; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="edit-details-header">Permisions</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <table class="table">
                                    <thead>
                                        <th></th>
                                        <th>Full access</th>
                                        <th>Create</th>
                                        <th>Read</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Users</td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Patients</td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Claims</td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Collections</td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Appointments</td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Reports</td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                            <td><input type="checkbox" name="" class="" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12">
                    <div class="row">
                         
                        Patients 
                        Claims 
                        Appoitnments 
                        Collections 
                        Task 
                        Reports
                    </div>
                </div>
            </div>
        </div>
    </div>
<?Php else: ?>
    <div class="row">
        <div class="col-lg-12">
            <p>No user found</p>
        </div>
    </div>
<?Php endif; ?>
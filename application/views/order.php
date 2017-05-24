<section id="order-page">
        <div class="container">
            <div class="center">        
                <h2>ORDER FORM</h2><br>
            </div> 

            <div class="row order-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-order-form" class="order-form" name="order-form" method="post" action="send.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" placeholder="First Name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Delivery Address*</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Give us your exact location whether its an office, house, apartment (Street name, Street number, Zip code)" ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Choose Your Order</label><br>
                            <select class="col-sm-12"> 
                                <option value="Iga Bakar">Iga Bakar - Rp 100,000/kg</option>
                                <option value="Ayam Bakar">Ayam Bakar - Rp  </option>
                                <option value="Nasi Kuning">Nasi Kuning - Rp  </option>
                                <option value="Rollade">Rollade - Rp </option>
                                <option value="Serundeng">Serundeng - Rp </option>
                                <option value="Ikan Suwir Rica">Ikan Suwir Rica - Rp </option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label>Payment Method</label><br>
                            <select class="col-sm-12"> 
                                <option value="bca">BCA</option>
                                <option value="bni">BNI</option>
                                <option value="mandiri">Mandiri</option>
                            </select>              
                        </div>
                        </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                        <label><br></label>
                            <input type="text" name="subject" class="form-control" placeholder="Last Name" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number* </label>
                            <input type="number" placeholder="example: 08xx-xxx" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Delivery Area *</label><br>
                            <select class="col-sm-12"> 
                                <option value="Jakarta Selatan">Jakarta Selatan </option>
                                <option value="Jakarta Utara">Jakarta Utara </option>
                                <option value="Jakarta Timur">Jakarta Timur </option>
                                <option value="Jakarta Barat">Jakarta Barat </option>
                                <option value="Jakarta Pusat">Jakarta Pusat </option>
                                <option value="Depok">Depok </option>
                            </select> 
                        </div>

                        <div class="form-group">
                           <br> <label>Quantity</label><br>
                            <select class="col-sm-12"> 
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option> 
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="If your order is more than 15, describe it here" ></textarea>
                        </div>
                    </div> 

                         <div class="col-sm-12 col-sm-offset-1">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required" style="background-color: grey" ">Submit Message</button>
                        </div>        
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#order-page-->  
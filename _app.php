<div id="form_con">
       <h1>Set an Appointment</h1></br>
            <p>Please Choose the Month, Date or Day, and time of the day you would like your appointment, and we will contact you regarding availability.</p>

            <form id="form1" name="form1" method="post" action="app_send.php">
                <div id="form_label"><label for="name"></label><input name="name" type="text" id="name" placeholder="Name"size="25" required="" class="form-control" /></div>

                <div id="form_label"><label for="email"></label><input name="email" type="text" id="email" placeholder="Email" size="25" required="" class="form-control" /></div>

                <div id="form_label"><label for="phone"></label><input name="phone" type="text" id="phone" placeholder="Phone Number"size="25" class="form-control" /></div>


                <div id="form_label"><label for="month"></label>
                <select name="month" id="month" size="1">
                <option selected="">Month</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
                </select>
                </div>

                <div id="form_label"><label for="date"></label>
                <select name="date" id="date" size="1">
                <option selected="">Date</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
                </select>
                </div>

                <div id="form_label"><label for="day"></label>
                <select name="day" id="day" size="1">
                <option selected="">or Day</option>
                <option>Monday</option>
                <option>Tuesday</option>
                <option>Wednesday</option>
                <option>Thursday</option>
                </select>
                </div>

                <div id="form_label"><label for="time"></label>
                <select name="time" id="time" size="1">
                <option selected="">Time</option>
                <option>Morning</option>
                <option>Afternoon</option>
                <option>Evening</option></select>
                </div>


                <div id="form_label"><label for="desc"></label><textarea id="form_label" placeholder="Comments" name="desc" cols="25" rows="3" id="desc" class="form-control"></textarea></div>

                <div class='req'><label for='website'>Name Here</label><input type='text' name='website'></div>

                <div id="form_send"> <input type="submit" name="button" id="button" value="Send" class="btn btn-primary"/></div>
                <div id="form_send"><input type="reset" name="Reset" id="Reset" value="Clear" class="btn btn-warning" /></div>
            </form>
</div>

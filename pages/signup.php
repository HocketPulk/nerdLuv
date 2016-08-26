<div id="option1">
				<form action="index.php" method="post">
                    <dl>
                        <dd>
                            <strong>Name:</strong><br />
                            <input type="text" name="name" size="20" placeholder="First and Last Name" required/>
                        </dd>
                        <dd>
                            <strong>Gender:</strong><br />
                            <input type="radio" name="gender" value="M" required/>Male<br />
                            <input type="radio" name="gender" value="F" />Female
                        </dd>
                        <dd>
                            <strong>Age:</strong><br />
                            <input type="number" name="age" min="18" max="150" placeholder="Age" required/>
                        </dd>
                        <dd>
                            <strong>Personality Type:</strong><br />
                            <input type="text" name="type" size="6" maxlength="4" placeholder="Keirsey" required/><br />
                            <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp" alt="personality test" target="_blank"><em>Don't know your type?</em></a>
                        </dd>
                        <dd>
                            <strong>Favorite OS:</strong><br />
                            <select name="comp" required>
                                <option value="Windows">Microsoft Windows</option>
                                <option value="Mac OS X">Mac OS X</option>
                                <option value="Linux">Linux</option>
                            </select>
                        </dd>
                        <dd>
                            <strong>Seeking Age:</strong><br />
                            <input type="number" name="min" min="18" max="150" placeholder="min" required/> to <input type="number" name="max" min="18" max="150" placeholder="max" />
                        </dd>
                    </dl>
                    <input class="submit" type="submit" value="Sign Up" />
                </form>
</div>
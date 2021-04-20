<?php

$afdummy = '';
$afdummy = $afdummy .   '<div class = "eingabe">
                            <form action="index.php" method="post">
                                <fieldset>
                                    <legend> Eingabe </legend>
                                        <p>
                                            <label for="Beschreibung">
                                             Beschreibung:
                                            </label>
                                            <input type="text" name="Beschreibung" id="Beschreibung" />
                                        </p>
                                        <p>
                                            <input type="submit" name="submit" /> oder 
                                            <input type="reset" />
                                        </p>
                                </fieldset>
                            </form> 
                        </div>';

echo $afdummy;
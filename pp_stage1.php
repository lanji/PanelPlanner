    <form action="'.$_SERVER['REQUEST_URI']." method="post">

    <!-- Begin Panelist -->

    <p>
    First Name (required) <br />
    <input type="text" name="pp-first-name" pattern="[a-zA-Z0-9 ]+" size="40" />
    </p>
    <p>
    Last Name (required) <br />
    <input type="text" name="pp-last-name" pattern="[a-zA-Z0-9 ]+" size="40" />
    </p>
    <p>
    Email Address (required) <br />
    <input type="email" name="pp-email" size="40" />
    </p>
    <p>
    Age (required) <br />
    <input type="text" name="pp-age" pattern="[0-9]+" size="40" />
    </p>

    <!-- End Panelist -->
    
    <p>
    <input type="checkbox" checked="false" id="pp-hasCopanelist" onchange="javascript:show_hide(\'CoPanelist\',\'pp-hasCopanelist\');"/> I have a CoPanelist.
    </p>

    <!-- Begin Copanelist -->
    
    <div id="CoPanelist" style="display: none" >
    <p>
    First Name (required) <br />
    <input type="text" name="pp-first-name2" pattern="[a-zA-Z0-9 ]+" size="40" />
    </p>
    <p>
    Last Name (required) <br />
    <input type="text" name="pp-last-name2" pattern="[a-zA-Z0-9 ]+" size="40" />
    </p>
    <p>
    Email Address (required) <br />
    <input type="email" name="pp-email2"  size="40" />
    </p>
    <p>
    Age (required) <br />
    <input type="text" name="pp-age2" pattern="[0-9]+" size="40" />
    </p>
    </div>

    <!-- End Copanelist / Begin Panel -->

    <p>
    Panel Title (required) <br />
    <input type="text" name="pp-title" size="40" />
    </p>
    Short Panel Description (required) <br />
    <textarea rows="10" cols="35" name="pp-description"</textarea>';
    </p>
    <p>
    Detailed Panel outline (required) <br />
    <textarea rows="10" cols="35" name="pp-outline"</textarea>';
    </p>
    <p><input type="submit" name="pp-submitted" value="Send"/></p>
    </form>
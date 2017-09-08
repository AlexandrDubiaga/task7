<html lang="en">
    <head>
        <title>%TITLE%</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" value="%NAME%" name="name" placeholder="name">
                <div>%ERROR_NAME%</div>
            </div>
            <div class="form-group">
                <select class="form-control" name="subject">
                    <option %sel_one% value="0"> %SELECT_0% </option>
                    <option %sel_two% value="1"> %SELECT_1% </option>
                    <option %sel_three% value="2"> %SELECT_2% </option>
                    <option %sel_fourth% value="3"> %SELECT_3% </option>
                </select>
                <div>%ERROR_LIST%</div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" value="%EMAIL%" name="email"  placeholder="email">
                <div>%ERROR_EMAIL%</div>
            </div>
            <div class="form-group">
                <textarea placeholder="Message"  class="form-control" name="msg"  rows="3">%AREA%</textarea>
                <div>%ERROR_AREA%</div>
            </div>
            <button type="submit" class="btn btn-primary">SEND</button>
        </form>
        <div class="form-group" >
            <div>%ERROR_SEND%</div>
            <div>%SUCCES_MAIL%</div>
        </div>
        <div>%ERRORS_FIELDS%</div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
</head>
<body>
<p>
    Hi {{ $user['given_name'] }},<br />
    Your last membership payment for Build Brighton has now expired and you have been marked as having left.<br />
    We are sorry to see you go and hope you had a great time while you were here.<br />
    <br />
    If you have any comments or feedback we would love to hear from you, please email the trustees at <a href="mailto:trustees@buildbrighton.com">trustees@buildbrighton.com</a>
</p>
@if ($memberBox)
<p>
    It looks like you have a members storage box, this will be put back into circulation so please ensure you have
    removed all your items from it, if you haven't you must arrange a time to collect things otherwise they may be recycled.
</p>
@endif
<p>
    If you have changed your mind and wish to remain part of Build Brighton you can do this by logging in and setting up a subscription payment.<br />
    <a href="{{ URL::route('home') }}">Build Brighton Member System</a><br/>
</p>
<p>
    Thank you,<br />
    The Build Brighton Trustees
</p>

</body>
</html>

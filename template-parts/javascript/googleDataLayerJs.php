<?php
$AuthorUser = get_field("editor_user");
?>

<script>
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }

    let googleCID = getCookie('_ga');
    let pageURL = window.location.href;
    var dataLayer = window.dataLayer = window.dataLayer || [];

    setTimeout(() => {
        console.log('<?php echo $AuthorUser['display_name']; ?>')
        dataLayer.push({
        'event': 'trackerReady',
        'client_id': googleCID,
        'pagePostAuthor': "<?php echo $AuthorUser['display_name']; ?>",
        'pageURL': pageURL
    });
    }, 3000)
    
</script>
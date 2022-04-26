###Data Structures

Tables
    Users
        -id
        -name
        -email
        -username
        -password

    Blogs
        -id
        -title
        -description
        -image
        -author(user_id)

    Reactions
        -type
        -user_id
        -blog_id

    Comments
        -blog_id
        -user_id
        -description

    Bookmarks
        -user_id
        -blog_id

Models
    Eloquent
    DB

Controllers
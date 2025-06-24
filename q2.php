
 <?php
//  Tables -- users,books,borrows 

Schema::create('book_user', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('book_id')->constrained()->onDelete('cascade');
    $table->date('borrow_date');
    $table->date('return_date')->nullable();
    $table->enum('status', ['borrowed', 'returned', 'overdue'])->default('borrowed');
    $table->timestamps();
});

// In User model
public function borrows()
{
    return $this->hasMany(Borrow::class);
}

public function books()
{
    return $this->belongsToMany(Book::class)
                
}

//  In Book model
public function borrows()
{
    return $this->hasMany(Borrow::class);
}

public function users()
{
    return $this->belongsToMany(User::class)
                
}
// In Borrow.php

public function user()
{
    return $this->belongsTo(User::class);
}

public function book()
{
    return $this->belongsTo(Book::class);
}

 ?>
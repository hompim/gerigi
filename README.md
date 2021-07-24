# Website Gerigi 2021

## Login admin

username : admin  
password : haiadmin123

login admin menggunakan hardcode pada controller `Home` pada fungsi `loginAct`

## Database

nama database adalah gerigi  
untuk file sql database ada di root pada folder `database`  
file sql dengan nama `gerigiStructureOnly` akan membuat struktur databasenya saja tanpa data sedangkan untuk file `gerigiWithDummyData` adalah database dengan data dummy yang digunakan selama proses produksi

## Folder assets dan view

Untuk menghindari konflik pada front-end, saat menambahkan assets dan/atau view untuk front-end silahkan buat folder baru pada folder assets dan/atau dengan nama sesuai dengan keguaannnya
ex : mau menambahkan assets untuk `homepage`, maka pada folder assets buat folder baru dengan nama `homepage` (berlaku juga untuk folder view)

## Spreadsheet Use Case dan Database

https://docs.google.com/spreadsheets/d/1X1c3gK3tTahrwNHqFC37YggeN14firZYp9AyvfDOBNM/edit?usp=sharing

## Tutorial singkat penggunaan git cli

### Melakukan Clone pada repository yang akan diguankan untuk bekerja
1. `git clone (link repo)`  => ex: `git clone https://github.com/Webnya-Gerigi2021/gerigi`  

### Standar push github
1. `git init` => kalo belum ada file `.git` di projectmu (hanya perlu dilakukan 1 kali, kalo udah pernah di init ga perlu lagi).  
2. `git remote add (nama remote repo) (link ke reponya)` => ex: `git remote add origin https://github.com/Webnya-Gerigi2021/gerigi`, origin bisa diganti bebas misal main, master, dsb karna itu hanya penamaan ke link repo kita serta kita bisa menambahkan lebih dari 1 remote. misal `origin` linknya adalah `https://github.com/Webnya-Gerigi2021/gerigi`, `dashboardMaba` linknya adalah `https://github.com/Webnya-Gerigi2021/Dashboard-mahasiswa` dan lain-lain sesuai kebutuhan (hanya perlu dilakukan 1 kali, kalo udah pernah add remote ga perlu lagi. untuk mengecek remote nya bisa pake `git remote -v`).  
3. `git add .` => untuk menambah semua file pada folder yang bakal di push ke repository. tanda `.` bisa di ganti dengan `-A` atau `-all`, fungsinya tetap sama.  
4. `git commit -m "pesan commit mu"` => digunakan untuk melakukan commit file yang sudah di add tadi serta menambahkan pesan commitnya.  
5. `git push (nama remote repo/link langsung) (nama branch)` => ex: `git push origin master`, harus melakukan point nomer 4 terlebih dahulu jika ingin menyinkat linknya atau bisa menggunakan `git push https://github.com/Webnya-Gerigi2021/Dashboard-mahasiswa master` jika males setting remote hehe.

### Melakukan pull request
Sangat disarankan melakukan pull terlebih dahulu jika ingin push ke branch utama, namun akan sangat munkin terjadi conflict pada kode yang sudah dikerjakan. kalo males benerin conflict (i know that was kinda hard to fix this) silahkan membuat branch baru pada repository dan serahkan kepada yang ngedit readme ini untuk fixnya //sad noises
1. `git pull (remote repo/link) (nama branch)` => ex: `git pull origin master`  

### Mengecek dan membuat branch baru
1. `git branch` => untuk mengecek branch, branch aktif akan di tandai dengan tanda bintang(`*`)  
![git branch](https://cdn.discordapp.com/attachments/851105281902379108/868515787080597534/unknown.png)  
pada contoh di atas menunjukkan bahwa branch yang aktif saat ini adalah branch `second_branch`  
2. `git checkout -b (nama branch)` => digunakan untuk membuat brach baru pada local foldermu (jadi kalo belum di push branchnya belum ada di repo gitnya)
ex: mau menambah branch baru dengan nama `second_branch`  
![git checkout -b](https://cdn.discordapp.com/attachments/851105281902379108/868516838504562748/unknown.png)  
3. `git checkout (nama branch)` => digunankan untuk mengganti branch yang aktif saat ini  
ex: mau mengganti branch yang aktif dari `second_branch` menjadi `master`  
![git checkout](https://cdn.discordapp.com/attachments/851105281902379108/868517228583190598/unknown.png)  
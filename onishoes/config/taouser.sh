clear
read -p “Nhap chuoi dinh danh user” ma
read -p “Nhap so luong user can tao ” n
while [ $n -gt 0 ]
do
useradd $ma$n
echo “123456” | passwd $ma$n  —stdin
n=$[ $n – 1 ]
done
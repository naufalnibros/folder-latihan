using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace IndexOf
{
    class Program
    {
        static void Main(string[] args)
        {
            /* Mencari posisi sebuah kata dalam suatu string, 
             * Jika kata tersebut banyak ditemukan dalam string tersebut 
             * maka yang direturn adalah posisi dari kata
             * yang ditemukan pertama kali
             */

            string nama = "Asadullohil Ghalib Kubat";
            int posisi = nama.IndexOf("Ghalib");
            Console.WriteLine(posisi); // hasilnya 12 =  karena Ghalib menempati urutan string ke-12
        }
    }
}

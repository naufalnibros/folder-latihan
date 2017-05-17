using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace LastIndexOf
{
    class Program
    {
        static void Main(string[] args)
        {
            /*
             * Mencari posisi sebuah kata dalam suatu string, Jika
             * kata tersebut banyak ditemukan dalam string
             * tersebut maka yang direturn adalah posisi dari kata20
             * Workshop Trunojoyo Programming Contest – HIMATIF UTM ©2011
             * yang ditemukan terkhir
             */

            string nama = "Asadullohil Ghalib Ghalib";
            int posisi = nama.LastIndexOf("Ghalib");
            Console.WriteLine(posisi);
        }
    }
}

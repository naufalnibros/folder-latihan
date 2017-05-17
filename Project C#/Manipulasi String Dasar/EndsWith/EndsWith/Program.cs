using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EndsWith
{
    class Program
    {
        static void Main(string[] args)
        {
            //Memeriksa beberapa karakter terakhir dari sebuah string
            string namaFile = "Bkuk Panduan CSharp.pdf";

            if (namaFile.EndsWith(".pdf") == true)
            {
                Console.WriteLine("Ini adalah file pdf");
            }
            else
            {
                Console.WriteLine("Ini bukan file .pdf");
            }
        }
    }
}

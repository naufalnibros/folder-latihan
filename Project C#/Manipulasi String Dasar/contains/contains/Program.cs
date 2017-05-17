using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace contains
{
    class Program
    {
        static void Main(string[] args)
        {
            //Memeriksa apakah sebuah string mengandung kata - kata tertentu
            string nama = "Aku sayang kamu";

            if (nama.Contains("sayang") == true)
            {
                Console.WriteLine("Ditemukan kata kata sayang");
            }
            else
            {
                Console.WriteLine("Not Found");
            }
        }
    }
}

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Equals
{
    class Program
    {
        static void Main(string[] args)
        {
            //Memeriksa apakah 2 string memiliki nilai yang sama

            Console.Write("Masukkan Password   : ");
            string password = Console.ReadLine();
            Console.Write("Konfirmasi Password : ");
            string confirPassword = Console.ReadLine();

            Console.WriteLine("\n");

            if (password.Equals(confirPassword))
            {
                Console.WriteLine("Password sama");
            }
            else
            {
                Console.WriteLine("Password tidak sama");
            }
        }
    }
}

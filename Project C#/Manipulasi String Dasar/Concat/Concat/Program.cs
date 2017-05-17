using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Concat
{
    class Program
    {
        static void Main(string[] args)
        {
            // Menggabungkan nilai dari 2 buah string
            string nama1 = "Kubat";
            string nama2 = "Ghalib";
            int hasil = nama1.CompareTo(nama2);
            Console.WriteLine(hasil);
            Console.ReadLine();
        }
    }
}

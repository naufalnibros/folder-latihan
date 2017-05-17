using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Replace
{
    class Program
    {
        static void Main(string[] args)
        {
            //Mereplace String dengan beberapa karakter
            string nama = "Bambang";
            string hasil = nama.Replace('a', 'i');
            Console.WriteLine(hasil);
        }
    }
}

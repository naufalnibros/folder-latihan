using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ToUpper
{
    class Program
    {
        static void Main(string[] args)
        {
            //Memformat sebuah string menjadi huruf kapital
            string kalimat = "teknik informatika";
            string hasil = kalimat.ToUpper();
            Console.WriteLine(hasil);
        }
    }
}

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ToCharArray
{
    class Program
    {
        static void Main(string[] args)
        {
            //Memecah sebuah string menjadi sebuah Array karakter
            string nama = "Aku Sayang Pean";
            char[] huruf = nama.ToCharArray();
            for (int i = 0; i < huruf.Length; i++)
                Console.WriteLine(huruf[i]);
        }
    }
}
